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
});

Route::GET('show','book_controller@show');

Route::apiResource('users','user_controller');
Route::POST('userStore','user_controller@userStore');
Route::GET('show','user_controller@show');
Route::POST('login','user_controller@login');


Route::group(['middleware'=>['auth']], function(){
Route::apiResource('books','book_controller');
Route::POST('store','book_controller@store');
});
