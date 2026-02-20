<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Follow;
use Illuminate\support\Facades\Auth;


class FollowsController extends Controller
{
    public function follow(){
        $following_id = Auth::user()->follows()->pluck('following_id');
        $followings = User::WhereIn('id', $following_id)->get();
        $followed_id = Auth::user()->follows()->pluck('followed_id');
        $followed = User::WhereIn('id', $followed_id)->get();
        $followings_post = Post::query()->WhereIn('user_id', Auth::user()->follows()->pluck('following_id'))->latest()->get();
        return view ('follows.followList', ['followings'=>$followings, 'followings_post'=>$followings_post]);
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
