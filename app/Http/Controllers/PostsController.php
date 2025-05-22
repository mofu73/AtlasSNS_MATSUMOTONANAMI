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
        $list = Auth::user();//ログインしてるユーザー情報取得
        $username = Auth::user()->username;
        $list = Post::get();
        return view('posts.index',['lists'=>$list]);
    }


    //登録処理
    public function create(Request $request){
         $request->validate([
            'post' => 'required|alpha|between:1,150',
        ]);

        $post = $request->input ('newPost');
        $user_id = Auth::id();
        Post::create([
            'post' => $post,
            'username' => $username,
            'user_id' => $user_id
        ]);
        return redirect('/top');
    }

    public function update(Request $request){
        $id = $request->input('id');
        $up_post = $request->input('upPost');

        Post::where('id', $id)->update([
            'post' => $up_post,
        ]);
        return redirect('/top');
    }

        public function delete(Request $request){
            Post::where('id', $id)->delete();
            return redirect('/top');
    }
}
