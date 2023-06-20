<?php

use App\Http\Controllers\Api\SearchController;
use App\Http\Controllers\Api\TopicsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//  Маршруты по темам
Route::group(['prefix' => 'topics','name' => 'topics'], function() {
    Route::controller(TopicsController::class)->group(function () {

        Route::get('/','index')->name('index');
        Route::post('/','store')->name('store');
        Route::get('/{id}','show')->name('show');
        Route::put('/{id}','update')->name('update');
        Route::delete('/{id}','destroy')->name('destroy');

    });
});


//  Маршруты по поиску
Route::group(['prefix' => 'search','name' => 'search'], function() {
    Route::controller(SearchController::class)->group(function () {

        Route::get('/','index')->name('index');

    });
});
