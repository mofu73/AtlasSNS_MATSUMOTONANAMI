<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function search(){
        return view('users.search');
    }

    public function index(){
        return view('users/search');
    }
}
