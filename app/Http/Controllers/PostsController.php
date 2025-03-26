<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    //投稿の表示
    public function index(){
        return view('posts.index');
    }

    //登録処理
    public function store(Request $request){
        $registerPost = $this->post->InsertPost($request);
        return redirect()->route('posts.index');

        $validated = $request->validate([
            'post' => 'required', 'alpha', 'between:1,150',
        ]);

        //$post = $request->input('post');
        //Post::store(['post' => $post]);
        //return back();
    }
}
