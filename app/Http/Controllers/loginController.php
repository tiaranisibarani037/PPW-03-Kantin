<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function postlogin (Request $request){
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect('/');
        }
    }

    public function logout (Request $request){
        Auth::logout();
        return redirect('/login');
    }
}