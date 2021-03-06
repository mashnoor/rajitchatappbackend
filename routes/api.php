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


Route::post('signup', 'UserController@signup');

Route::get('users', 'UserController@getallusers');

Route::post('login', 'UserController@login');

Route::get('getphoto/{name}', 'UserController@getphoto');

Route::get('getitems', 'UserController@getItems');
