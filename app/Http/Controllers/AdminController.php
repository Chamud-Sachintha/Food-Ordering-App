<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function showAdminDashboard() {

        if (Session::has('user')) {
            return view('admin_panel.Dashboard');
        } else {
            return redirect('/admin/login');
        }
    }
}
