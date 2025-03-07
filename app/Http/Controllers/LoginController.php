<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function __construct(){
        $this->middleware('auth');
    }
}

//class LoginController extends Controller
//{
    //public function login (){
        //return view('/login');
    //}
//}
