<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/create/user', 'ApiController@save_web_b_data');

Route::get('/email/verify/user/{email}', 'ApiController@verify_web_b_user');

Route::get('/update/password/{email}/{password}', 'ApiController@change_web_b_password');
