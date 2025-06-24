<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{
    //
    public function followList(){
        $following_id = Auth::user()->follows()->pluck('following_user_id');//
        $followings = User::WhereIn('user_id', $following_id)->get();
        return view('follows.followList');
    }
    public function followerList(){
        return view('follows.followerList');
    }
}
