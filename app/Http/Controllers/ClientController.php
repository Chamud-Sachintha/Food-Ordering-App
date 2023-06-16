<?php

namespace App\Http\Controllers;

use App\Models\Eatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public function showClientDashboard() {
        if (Session::has('client')) {   
            return view('client_panel.dashboard');
        } else {
            return redirect('/login');
        }
    }

    public function showOrderEatablesPage() {
        if (Session::has('client')) {

            $allEatableDetails = DB::table('eatables')->select('eatables.eatableName', 'eatables.eatableImage', 'eatables.description', 'eatables.status', 'eatables.eatablePrice', 'categories.categoryName')
                                                        ->join('categories', 'eatables.catId', '=', 'categories.id')
                                                        ->where('eatables.status', '=', 1)
                                                        ->get();

            return view('client_panel.ShowEatables')->with(['eatables' => $allEatableDetails]);
        } else {
            return redirect('/login');
        }
    }
}
