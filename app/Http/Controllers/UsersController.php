<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
    }

    public function search(Request $request){
        $keyword = $request->input('keyword');//変数の定義
        $query = Post::query();
        if(!empty($keyword)){
            $query->where('username', 'LIKE', "%{$keyword}%")->get();
        }
        return view('users.search');
    }

    public function index(){
        return view('users/search');
    }
}
