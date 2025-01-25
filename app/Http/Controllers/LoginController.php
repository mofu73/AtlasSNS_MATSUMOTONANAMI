<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
}

class LoginController extends Controller
{
    public function login (){
        return view('/login');
    }
}
