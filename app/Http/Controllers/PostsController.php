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
        $post = Post::get();
        return view('posts.index',['posts'=>$post]);
        $post = Post::with('user')->whereIn('user_id', $user)->orwhere('user_id', $following_id)->get();//フォローしているユーザーidの投稿内容を取得
    }

    //登録処理
    public function create(Request $request){
         $request->validate([
            'post' => 'required|between:1,150',
        ]);

        $post = $request->input ('newPost');
        $user_id = Auth::id();
        Post::create([
            'post' => $post,
            'user_id' => $user_id
        ]);
        return redirect('/top');
    }

    public function update(Request $request){
        $id = $request->input('id');
        $up_post = $request->input('upPost');
        $user_id = Auth::id();
        //dd($up_post);

        Post::where('id', $id)->update
        (['post' =>$up_post]);

        return redirect('/top');
    }

    public function delete($id){
            Post::where('id', $id)->delete();
            return redirect('/top');
    }
}
