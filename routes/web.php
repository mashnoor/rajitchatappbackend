<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('register', function () {return view('welcome');})->name('register');

Route::get('/home', 'HomeController@index');

Route::get('/users', 'HomeController@user_index');
Route::post('/users-create', 'HomeController@user_create');
Route::get('/users-edit', 'HomeController@user_edit');
Route::post('{id}/users-update', 'HomeController@user_update');
Route::get('{id}/users-delete', 'HomeController@user_delete');

Route::get('/items', 'HomeController@item_index');
Route::post('/items-create', 'HomeController@item_create');
Route::get('/items-edit', 'HomeController@item_edit');
Route::post('{id}/items-update', 'HomeController@item_update');
Route::get('{id}/items-delete', 'HomeController@item_delete');