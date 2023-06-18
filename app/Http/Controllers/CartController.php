<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addItemToCart(Request $eatableDetails) {

        if (Session::has('client')) {
            $userId = Session::get('client')['id'];
            $cartDetails = $this->verifyCart($userId);

            $cartItem = CartItem::where(['cartId' => $cartDetails->id, 'eatableId' => $eatableDetails->eatableId]);

            $createCartItem = null;

            if ($cartItem) {
                $createCartItem = CartItem::where(['cartId' => $cartDetails->id, 'eatableId' => $eatableDetails->eatableId])
                                        ->update([
                                            'quantity' => $eatableDetails->quantity
                                        ]);
            } else {
                $createCartItem = CartItem::create([
                    'cartId' => $cartDetails->id,
                    'eatableId' => $eatableDetails->eatableId,
                    'quantity' => $eatableDetails->quantity,
                    'create_time' => strtotime($this->getDayTime())
                ]);   
            }

            if ($createCartItem) {
                return response('Operation Complete', 201);
            } else {
                return response('There is an Error Occur', 500);
            }
        } else {
            return redirect('/login');
        }
    }

    public function showCartPage() {

        if (Session::has('client')) {

            $cartItems = DB::table('eatables')->select(
                                                    'eatables.id as eatableId', 'eatables.eatableImage', 'eatables.eatableName', 'eatables.eatablePrice',
                                                    'categories.categoryName' ,
                                                    'cart_items.quantity',
                                                    'carts.id as cartId'
                                                )
                                                ->join('categories', 'categories.id', '=', 'eatables.catId')
                                                ->join('cart_items', 'eatables.id', '=', 'cart_items.eatableId')
                                                ->join('carts', 'cart_items.cartId', '=', 'carts.id')
                                                ->join('clients', 'clients.id', '=', 'carts.clientId')
                                                ->where('clients.id', '=', Session::get('client')['id'])
                                                ->get();

            $getClientCartId = Cart::where(['clientId' => Session::get('client')['id']])->first();

            $totalCartItemPrice = 0;

            foreach ($cartItems as $key => $value) {
                $totalCartItemPrice += $value->eatablePrice;
            }

            return view('client_panel.CartPage')->with(['cartItems' => $cartItems, 'totalCartItemPrice' => $totalCartItemPrice
                                                    , 'cartId' => $getClientCartId->id]);
        } else {
            return redirect('/login');
        }
    }

    private function verifyCart($clientId) {
        $result = null;

        try {
            $cart = Cart::where(['clientId' => $clientId])->first();
        
            if ($cart != null) {
                $result = $cart;
            } else {
                $createCart = Cart::create([
                    'clientId' => $clientId,
                    'create_time' => strtotime($this->getDayTime())
                ]);

                $result = $createCart;
            }
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

        return $result;
    }

    private function getDayTime() {
        return date("Y-m-d H:i:s");
    }
}
