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
        $posts = Post::get();
        return view('posts.index');
    }

    public function posts(){
        $posts = Post::all();
        return view('posts.index',['posts'=>$posts]);
    }

    //登録処理
    public function create(Request $request){
         $request->validate([
            'posts' => 'required|alpha|between:1,150',
        ]);

        $post = $request->input('newPost');
        $user_id=Auth::user()->id;

        Post::create([
            'post' => $post,
            'user_id' => $user_id
        ]);
        return redirect('/top');
    }
}
