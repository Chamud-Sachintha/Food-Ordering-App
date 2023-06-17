<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addItemToCart(Request $eatableDetails) {

        if (Session::has('client')) {
            $userId = Session::get('client')['id'];
            $cartDetails = $this->verifyCart($userId);

            dd($cartDetails);
        } else {
            return redirect('/login');
        }
    }

    private function verifyCart($clientId) {

        $result = null;

        try {
            $cart = Cart::where(['clientId' => $clientId])->first();

            if ($cart->id == null) {
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
