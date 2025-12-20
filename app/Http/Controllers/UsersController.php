<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
    }

    public function search(Request $request){
        $keyword = $request->input('keyword');//変数の定義
        $query = User::query();
        if(!empty($keyword)){
            $query = User::where('username', 'LIKE', '%'.$keyword. '%')->get();
        }else{
            $query = User::all();
        }
        return view('users.search',['query'=>$query, 'keyword'=>$keyword]);
    }

    public function index(){
        return view('users/search');
    }
}
