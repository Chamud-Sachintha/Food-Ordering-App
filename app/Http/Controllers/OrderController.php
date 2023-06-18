<?php

namespace App\Http\Controllers;

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

        $placeNewOrder = Order::create([
                            'clientId' => Session::get('client')['id'],
                            'create_time' => strtotime($this->getDayTime())
                        ]);

        if ($placeNewOrder->id != null) {
            foreach ($cartDetails as $key => $value) {
                try {
                    $createOrderItem = OrderItem::create([
                        'orderId' => $placeNewOrder->id,
                        'eatableId' => $value->eatableId,
                        'quantity' => $value->quantity,
                        'status' => '0', // 0 - Pending 1 - Preparing 2 - Deliver
                        'create_time' => strtotime($this->getDayTime())
                    ]);
                } catch (\Exception $e) {
                    throw new \Exception($e->getMessage());
                }
            }

            return response('Operation Complete', 201);
        } else {
            return response('Operation Failed.', 500);
        }
    }

    private function getDayTime() {
        return date("Y-m-d H:i:s");
    }
}
