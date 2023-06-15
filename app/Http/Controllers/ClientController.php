<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
