<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\MebmerController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



Route::get('/',[PageController::class,'index'])->name('/');

Route::group(['prefix' => 'members'], function() {
    Route::get('/',[MebmerController::class,'index'])->name('members.index');
});

Route::group(['prefix' => 'forum'], function() {
    Route::get('/',[ForumController::class,'index'])->name('forum.index');
    Route::get('/search',[ForumController::class,'searchIndex'])->name('forum.search.index');
    Route::post('/search',[ForumController::class,'searchStore'])->name('forum.search.store');
    Route::get('/themes/{id}',[ForumController::class,'themesAll'])->name('forum.themes.all');
    Route::get('/theme/{id}',[ForumController::class,'themeGet'])->name('forum.theme.get');
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/topic/create', [ForumController::class, 'topicCreate'])->name('forum.topic.create');
        Route::post('/topic/create', [ForumController::class, 'topicStore'])->name('forum.topic.store');
    });
});



Route::get('/login',[AuthController::class,'showLoginForm'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('loginPOST');
Route::get('/register',[AuthController::class,'showRegisterForm'])->name('register');
Route::post('/register',[AuthController::class,'register'])->name('registerPOST');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
