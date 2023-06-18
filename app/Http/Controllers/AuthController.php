<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Client;
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

    public function showClientRegisterPage() {
        return view('auth.register');
    }

    public function registerNewCustomerDetails(Request $customerDetails) {

        $this->validate($customerDetails, [
            'username' => 'required', 'password' => 'required'
        ]);

        if ($customerDetails->password == $customerDetails->conf_password) {
            $clientDetails = Client::create([
                'username' => $customerDetails->username,
                'password' => Hash::make($customerDetails->password)
            ]);

            if ($clientDetails->id != null) {
                return redirect()->back()->with(['msg' => 'Account Created Successfully.']);
            } else {
                return redirect()->back()->with(['msg' => 'There is an error occured.']);
            }
        } else {
            return redirect()->back()->with(['msg' => 'Confirm Password Not Matched.']);
        }
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
                return redirect('/client/app');
            } else {
                return redirect()->back()->with(['status' => 'please enter useremail and password.']);
            }
        }
    }

    public function validateClientLogin(Request $loginDetails) {

        $this->validate($loginDetails, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $client = Client::where(['username' => $loginDetails->username])->first();

        if ($client == true && Hash::check($loginDetails->password, $client->password)) {
            Session::put('client', $client);
            return true;
        } else {
            return false;
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
