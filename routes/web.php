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
 Route::post('/post', [PostsController::class, 'store']);

 Route::get('/profile', [ProfileController::class, 'profile']);

 Route::get('/search', [UsersController::class, 'index']);

 Route::get('/follow-list', [PostsController::class, 'index']);
 Route::get('/follower-list', [PostsController::class, 'index']);

 Route::get('/post', [PostsController::class, 'index']);

 //  ログアウト
 Route::get('/logout', [LoginController::class, 'logout']);
