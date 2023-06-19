<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Eatable;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public function showClientDashboard() {
        if (Session::has('client')) {

            $activeCountList = $this->getActiveCountList();

            return view('client_panel.dashboard')->with(['eatableCount' => $activeCountList['eatableCount'], 'categoryCount' => $activeCountList['categoryCount']
                                                    ,   'ordersCount' => $activeCountList['orderCount'], 'cartItemsCount' => $activeCountList['cartItemsCount']]);
        } else {
            return redirect('/login');
        }
    }

    public function showOrderEatablesPage() {
        if (Session::has('client')) {

            $allEatableDetails = DB::table('eatables')->select('eatables.id', 'eatables.eatableName', 'eatables.eatableImage', 'eatables.description', 'eatables.status', 'eatables.eatablePrice', 'categories.categoryName')
                                                        ->join('categories', 'eatables.catId', '=', 'categories.id')
                                                        ->where('eatables.status', '=', 1)
                                                        ->get();

            return view('client_panel.ShowEatables')->with(['eatables' => $allEatableDetails]);
        } else {
            return redirect('/login');
        }
    }

    private function getActiveCountList() {

        $activeEatableCount = null;
        $activeCatageoriesCount = null;
        $myOrderCount = null;
        $cartItemCount = 0;

        try {
            $activeEatableCount = Eatable::where(['status' => 1])->count('*');
            $activeCatageoriesCount = Category::where(['status' => 1])->count('*');
            $ordersCount = Order::all()->count('*');
            $cartItemsList = DB::table('cart_items')->select('cart_items.id')->join('carts', 'carts.id', '=', 'cart_items.cartId')
                                                    ->where('carts.clientId', '=', Session::get('client')['id'])
                                                    ->get();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

        $cartItemCount = count($cartItemsList);

        $returnList['eatableCount'] = $activeEatableCount;
        $returnList['categoryCount'] = $activeCatageoriesCount;
        $returnList['orderCount'] = $ordersCount;
        $returnList['cartItemsCount'] = $cartItemCount;

        return $returnList;
    }
}
