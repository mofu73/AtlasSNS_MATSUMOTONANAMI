<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Post;



class ProfileController extends Controller
{
    public function edit()
{
    // 現在のユーザー情報を取得
    $user = Auth::user();
    // ビューにユーザー情報を渡す
    return view('profiles.profile', compact('user'));
}
    public function update(Request $request){
        //$img=$reauest->imgpath->store('');  //storeメソッドを追加
        $request->validate([
            'username' => 'required|between:2,12',
            'email' => 'required|between:5,40|email|unique:users,email,'.Auth::user()->id,
            'password' => 'required|between:8,20|alpha_num|confirmed',
            'password_confirmation' => 'required',
            'bio' => 'between:1,150',
            'images' => 'mimes:jpg, png, bmp, gif, svg',
        ]);

        $up_username = $request->input('username');
        $up_email = $request->input('email');
        $up_password = Hash::make($request->password);
        $up_bio = $request->input('bio');
        $images = $request->file('images')->getClientOriginalName();
        $up_images = $request->images->storeAs('',$images);
        $user_id = Auth::id();

        User::where('id', $user_id)->update
        (['username' =>$up_username, 'email' =>$up_email, 'password' =>$up_password, 'bio' =>$up_bio, 'icon_image' =>$up_images]);
        return redirect('/top');
 }

    public function profile($id){
        $users = User::where('id', $id)->first();
        $post = Post::where('user_id', $id)->get();
        return view('profiles.users_profile', ['users'=>$users, 'post'=>$post]);
    }

}
