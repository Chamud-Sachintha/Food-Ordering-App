<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Eatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function showAdminDashboard() {

        if (Session::has('user')) {

            $activeCountList = $this->getActiveCountList();

            return view('admin_panel.Dashboard')->with(['clientCount' => $activeCountList['clientCount'], 'categoriesCount' => $activeCountList['categoriesCount']
                                                    ,   'eatableCount' => $activeCountList['eatableCount']]);
        } else {
            return redirect('/admin/login');
        }
    }

    private function getActiveCountList() {

        $activeClientsCount = null;
        $activeCategoriesCount = null;
        $activeEatableCount = null;

        try {
            $activeClientsCount = Client::all()->count('*');
            $activeCategoriesCount = Category::where(['status' => 1])->count('*');
            $activeEatableCount = Eatable::where(['status' => 1])->count('*');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

        $returnList['clientCount'] = $activeClientsCount;
        $returnList['categoriesCount'] = $activeCategoriesCount;
        $returnList['eatableCount'] = $activeEatableCount;

        return $returnList;
    }
}
