<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Follow;

class FollowsController extends Controller
{
    //
    public function follow(){
        $following_id = Auth::user()->follows()->pluck('following_user_id');//
        $followings = User::WhereIn('user_id', $following_id)->get();
        return view('follows.followList');
    }
    //フォロー
    public function follows($id){
        $follower = auth()->user();
        $is_following = $follower->isFollowing($id);
        if(!$is_following) {
            $follower->follow($id);
            return back();
        }
    }
    public function unfollow(){
        return view('follows.followerList');
    }

    //フォロー解除
    public function unfollows($id) {
        $follower = auth()->user();
        $is_following = $follower->isFollowing($id);
        if($is_following) {
            $follower->unfollow($id);
            return back();
        }
    }
}
