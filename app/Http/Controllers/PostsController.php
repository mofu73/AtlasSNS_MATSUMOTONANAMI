<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\Post;
use App\Models\User;


class PostsController extends Controller
{
    //投稿の表示
    public function index(){
        $user = Auth::user();//ログインしてるユーザー情報取得
        $username = Auth::user()->username;
        $post = Post::get();
        return view('posts.index',['posts'=>$post]);
    }

    public function posts(){
        $post = Post::all();
    }

    //登録処理
    public function create(Request $request){
         $request->validate([
            'post' => 'required|alpha|between:1,150',
        ]);

        $post = $request->newPost;
        $user_id = Auth::user()->id;
        $post = $request->input('post');

        Post::create([
            'post' => $post,
            'user_id' => $user_id,
        ]);
        return redirect('/top');
    }
}
