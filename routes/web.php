<?php

use App\Http\Controllers\AnswerTopicController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\MebmerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;



Route::get('/',[PageController::class,'index'])->name('/');

Route::group(['prefix' => 'members'], function() {
    Route::get('/',[MebmerController::class,'index'])->name('members.index');
});

Route::group(['prefix' => 'forum'], function() {
    Route::get('/',[ForumController::class,'index'])->name('forum.index');
    Route::get('/search',[SearchController::class,'index'])->name('forum.search.index');
    Route::post('/search',[SearchController::class,'store'])->name('forum.search.store');
    Route::get('/topics/{id}',[TopicController::class,'all'])->name('forum.topics.all');
    Route::get('/topic/{id}',[TopicController::class,'show'])->name('forum.topic.show');
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/topic/create/{id}', [TopicController::class, 'create'])->name('forum.topic.create');
        Route::post('/topic/created', [TopicController::class, 'store'])->name('forum.topic.store');

        Route::post('/topic/answer', [AnswerTopicController::class, 'store'])->name('forum.answer.store');
    });
});



Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store'])->name('login.store');
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('register.store');
Route::get('/logout',[LogoutController::class,'store'])->name('logout');
