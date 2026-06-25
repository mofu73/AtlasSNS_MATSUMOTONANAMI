<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FollowsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



require __DIR__ . '/auth.php';
//  Route::get('/login', [LoginController::class, 'login']);
 //ログイン中のページ
 Route::get('/top', [PostsController::class, 'index']);
 Route::post('/top', [PostsController::class, 'index']);


 //登録
 Route::post('store', [PostsController::class, 'store']);

 Route::post('/index', [PostsController::class, 'index']);

  //投稿追加
 Route::post('/create', [PostsController::class, 'create']);

  //プロフィール表示
 Route::get('/profile', [ProfileController::class, 'edit']);

 //相手のプロフィール表示
 Route::get('/user/{id}/profile', [ProfileController::class, 'profile']);

 //プロフィール更新
 Route::post('/profile', [ProfileController::class, 'update']);

 //ユーザー検索
 Route::get('/search', [UsersController::class, 'search']);

 //編集処理
 Route::post('/top/update', [PostsController::class, 'update']);

 //削除処理
 Route::get('/post/{id}/delete', [PostsController::class, 'delete']);

 Route::get('/follow-list', [FollowsController::class, 'follow']);
 Route::get('/follower-list', [FollowsController::class, 'followed']);

 //フォローリスト表示
 Route::post('/search.blade/{id}/follow', [FollowsController::class, 'follows']);

 //フォロー解除
  Route::post('/search.blade/{id}/unfollow', [FollowsController::class, 'unfollows']);

  Route::post('/user/{id}/profile/unfollow', [FollowsController::class, 'unfollows']);

  Route::post('/users_profile.blade/{id}/follow', [FollowsController::class, 'follows']);
  Route::post('/users_profile.blade/{id}/unfollow', [FollowsController::class, 'unfollows']);

 //  ログアウト
 Route::get('/logout', [LoginController::class, 'logout']);
