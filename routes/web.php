<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::middleware(['is_login'])->group(function () {

    Route::get('/feed', [PostController::class, 'feed'])->name('feed');
    Route::post('/feed', [PostController::class, 'feed'])->name('feed');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/formPost', [PostController::class, 'formPost'])->name('creatPost');
    Route::post('/creatPost',[PostController::class,'storPost'])->name('storPost');

    Route::get('/updatePostPage/{post}',[PostController::class,'PageUpdate'])->name('PageUpdate');
    Route::put('/updatePost/{post}', [PostController::class, 'updatePost'])->name('updatePost');
    Route::delete('/deletePost/{post}',[PostController::class,'deletePost'])->name('deletePost');


    Route::get('/profile', [Controller::class, 'profile'])->name('profile');
   Route::get('/editProfile/{user}', [UserController::class, 'editProfile'])
    ->name('editProfile');
    Route::put('/updateProfile/{user}', [UserController::class, 'updateProfile'])
    ->name('updateProfile');




    Route::post('/post/{post}/comments',[PostController::class,'storeComment'])->name('coments');
    Route::delete('/delete/comment/{comment}',[PostController::class,'deletComment'])->name('deletComment');
    Route::post('/post/{post}/like',[PostController::class,'toggelLike'])->name('like');

    Route::get('/profile/{user}', [UserController::class, 'showUser'])->name('showProfile');
    
});

Route::middleware(['guest'])->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('/');
    Route::get('/showLogin', [AuthController::class, 'showLogin'])->name('auth.login');
    Route::get('/showRegister', [AuthController::class, 'showRegister'])->name('auth.register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');




});
