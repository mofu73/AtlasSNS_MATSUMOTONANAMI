<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create']);
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('register', [RegisteredUserController::class, 'create']);
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('added', [RegisteredUserController::class, 'added']);
    Route::post('added', [RegisteredUserController::class, 'added']);

});

Route::middleware('auth:users')->group(function () {
     Route::get('/top', [PostsController::class, 'index']);

 Route::get('/profile', [ProfileController::class, 'profile']);

 Route::get('/search', [UsersController::class, 'index']);

 Route::get('/follow-list', [PostsController::class, 'index']);
 Route::get('/follower-list', [PostsController::class, 'index']);

 //  ログアウト
 Route::get('/logout', [LoginController::class, 'logout']);
});
