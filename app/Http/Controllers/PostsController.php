<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //投稿の表示
    public function index(){
        return view('posts.index');
    }

    //投稿の作成
    public function store(Request $request){
        $validated = $request->validate([
            'post' => 'required', 'alpha', 'between:1,150',
        ]);

    }
    public function create(){
        return redirect('/top');
    }
}
