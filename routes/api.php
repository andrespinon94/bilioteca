<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

    Route::apiResource('books','book_controller');
    Route::GET('show','book_controller@show');
    Route::post('store','book_controller@store');


    Route::apiResource('users','user_controller');
    Route::POST();
    Route::POST();
});
