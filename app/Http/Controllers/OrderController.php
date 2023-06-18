<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function placeNewOrder(Request $orderDetails) {

        $cartDetails = DB::table('cart_items')->select('cart_items.eatableId as eatableId', 'cart_items.quantity', 'carts.clientId')
                                                ->join('carts', 'carts.id', '=', 'cart_items.cartId')
                                                ->where('carts.id', '=', $orderDetails->cartId)
                                                ->get();

        $verifyPendingOrder = $this->verifyPendingOrderExists(Session::get('client')['id']);
        $createOrderId = null;

        if ($verifyPendingOrder == null) {
            $createOrderId = Order::create([
                'clientId' => Session::get('client')['id'],
                'status' => '0', // 0 - Pending 1 - Preparing 2 - Deliver
                'create_time' => strtotime($this->getDayTime())
            ]);
        } else {
            $createOrderId = $verifyPendingOrder;
        }

        if ($createOrderId->id != null) {
            foreach ($cartDetails as $key => $value) {
                try {
                    $createOrderItem = OrderItem::create([
                        'orderId' => $createOrderId->id,
                        'eatableId' => $value->eatableId,
                        'quantity' => $value->quantity,
                        'create_time' => strtotime($this->getDayTime())
                    ]);
                } catch (\Exception $e) {
                    throw new \Exception($e->getMessage());
                }
            }

            $cartItemDelete = CartItem::where(['cartId' => $orderDetails->cartId])->delete();
            $cartDelete = Cart::where(['id' => $orderDetails->cartId])->delete();

            if ($cartItemDelete && $cartDelete) {
                return response('Operation Complete', 201);
            } else {
                return response('Operation Failed.', 500);
            }
        } else {
            return response('Operation Failed.', 500);
        }
    }

    public function showClientManageOrdersPage() {

        $allOrderList = array();

        if (Session::has('client')) {

            $allActiveOrders = Order::where(['clientId' => Session::get('client')['id']])->get();

            foreach ($allActiveOrders as $key => $value) {
                $itemCount = OrderItem::where(['orderId' => $value['id']])->count('*');
                $eatableList = DB::table('eatables')->select('eatables.eatablePrice')
                                                    ->join('order_items', 'order_items.eatableId', '=', 'eatables.id')
                                                    ->where('order_items.orderId', '=', $value['id'])
                                                    ->get();

                $totalAmt = 0;

                foreach ($eatableList as $itemKey => $eatable) {
                    $totalAmt += $eatable->eatablePrice;
                }   

                $data['orderId'] = $value['id'];
                $data['clientId'] = $value['clientId'];
                $data['status'] = $value['status'];
                $data['itemCount'] = $itemCount;
                $data['totalAmt'] = $totalAmt;

                $allOrderList[$key] = $data;
            }

            return view('client_panel.ManageOrders')->with(['allOrders' => $allOrderList]);
        } else {
            return redirect('/login');
        }
    }

    private function verifyPendingOrderExists($clientId) {

        $order = null;

        try {
            $order = Order::where(['clientId' => $clientId, 'status' => 0])->first();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

        return $order;
    }

    private function getDayTime() {
        return date("Y-m-d H:i:s");
    }
}
