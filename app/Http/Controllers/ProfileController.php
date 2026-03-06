<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function edit()
{
    // 現在のユーザー情報を取得
    $user = Auth::user();
    // ビューにユーザー情報を渡す
    return view('profile.edit', compact('user'));
}
    public function update(Request $request){
        $request->validate([
            'username' => 'required|between:2,12',
            'email' => 'required|between:5,40|email|unique:users,email, .Auth::user()->email',
            'password' => 'required|between:8,20|alpha_num',
            'password_confirmation' => 'required|confirmed',
            'bio' => 'between:1,150',
            'images' => 'mimes:jpg, png, bmp, gif, svg',
        ]);

        $up_username = $request->input('username');
        $up_email = $request->input('email');
        $up_password = $request->input('password');
        $up_bio = $request->input('bio');
        $up_images = $request->input('images');
        $user_id = Auth::id();
 }

    public function profile(){
        return view('profiles.profile');
    }
}
