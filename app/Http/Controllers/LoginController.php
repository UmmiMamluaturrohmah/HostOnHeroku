<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        if (Auth::guard("web")->attempt($request->only('email','password'))){
            return redirect()->to("/siswa");
        }
        elseif(Auth::guard("teacher")->attempt($request->only("email","password"))){
            return redirect()->to("/menu");
        }
        else{
            return redirect()->back();
        }
    }

    public function logout()
    {
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
            return redirect()->route("formlogin");
        }
        elseif(Auth::guard("teacher")->check()){
            Auth::guard('teacher')->logout();
            return redirect()->route("formlogin");
        }
    }
}
