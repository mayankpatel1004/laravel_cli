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


Route::post('login', 'Api\UserController@login');
Route::post('register', 'Api\UserController@register');
Route::post('/savewishlist','Api\ApiController@savewishlist');
Route::post('/saveproduct','Api\ApiController@saveproduct');
Route::get('/products','Api\ApiController@getProducts');
Route::get('/exportwishlist','Api\ApiController@exportwishlist');