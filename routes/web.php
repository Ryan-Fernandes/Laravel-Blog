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
Route::get('/', 'PostController@index');

Auth::routes();

Route::get('/home', 'PostController@index');

Route::get('/post/name/{author}','PostController@byName');
Route::get('/post/tag/{category}','PostController@byTag');
Route::resource('post', 'PostController');


Route::resource('category', 'CategoryController');

//
/*Route::get('/user','ProfileController@index');
Route::get('/user/{user}/edit',  ['as' => 'user.edit', 'uses' => 'ProfileController@edit']);
Route::patch('/user/{user}',  ['as' => 'user.update', 'uses' => 'ProfileController@update']);
*/Route::resource('user', 'ProfileController');