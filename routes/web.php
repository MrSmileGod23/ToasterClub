<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



Route::get('/',[PageController::class,'index'])->name('/');


Route::group(['prefix' => 'forum'], function() {

Route::get('/',[ForumController::class,'index'])->name('forum.index');

});



Route::get('/login',[AuthController::class,'showLoginForm'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('loginPOST');
Route::get('/register',[AuthController::class,'showRegisterForm'])->name('register');
Route::post('/register',[AuthController::class,'register'])->name('registerPOST');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
