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

Route::get('/', 'TeamController@index');
Route::get('/users/{user}', 'UserController@index');
Route::get('/teams/{team}', 'PostController@index');
Route::group(['middleware' => 'auth'], function() {
    Route::get('/posts/create', 'PostController@create');
    Route::get('/teams/{team}/posts/{post}/edit', 'PostController@edit');
    Route::put('/posts/{post}', 'PostController@update');
    Route::delete('/posts/{post}', 'PostController@destroy');
    Route::post('/posts', 'PostController@store');
});
Route::get('/teams/{team}/posts/{post}', 'PostController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


