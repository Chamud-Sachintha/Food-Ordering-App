<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showClientLoginPage() {
        return view('auth.Login')->with(['flag' => 'C']);
    }

    public function showAdminLoginPage() {
        return view('auth.Login')->with(['flag' => 'A']);
    }

    public function filterValidateLoginMethod(Request $request) {
        
        if ($request->flag == "A") {
            $res = $this->validateAdminLogin($request);

            if ($res) {
                return redirect('/admin/app');
            } else {
                return redirect()->back()->with(['status' => 'please enter useremail and password.']);
            }
        } else {
            $res = $this->validateClientLogin($request);

            if ($res) {
                return redirect('/admin/app');
            } else {
                return redirect()->back()->with(['status' => 'please enter useremail and password.']);
            }
        }
    }

    public function validateClientLogin(Request $request) {

        if ($request->userEmail != null && !empty($request->userEmail)) {
            // have to redirect to the client dashboard
        } else {
            return redirect()->back()->with(['status' => 'please enter useremail and password.']);
        }

    }

    public function validateAdminLogin(Request $loginDetails) {

        $this->validate($loginDetails, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = Admin::where(['username' => $loginDetails->username])->first();

        if ($user == true && Hash::check($loginDetails->password, $user->password)) {
            Session::put('user', $user);
            return true;
        } else {
            return false;
        }
    }
}
