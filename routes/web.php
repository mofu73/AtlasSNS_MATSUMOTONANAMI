<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LoginController;
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
 Route::get('/profile', [ProfileController::class, 'profile']);

 //ユーザー検索
 Route::get('/search', [UsersController::class, 'index']);

 //編集処理
 Route::get('/top/update', [PostsController::class, 'update']);

 //削除処理
 Route::get('/top/delete', [PostsController::class, 'delete']);

 Route::get('/follow-list', [PostsController::class, 'index']);
 Route::get('/follower-list', [PostsController::class, 'index']);

 //  ログアウト
 Route::get('/logout', [LoginController::class, 'logout']);
