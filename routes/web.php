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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/articles', 'ArticleController');

Route::get('/articles/{id}/delete', 'ArticleController@destroy')->where('id', '[0-9]+');
Route::get('/articles/{id}/edit', 'ArticleController@edit')->where('id', '[0-9]+');
//Route::post('/articles/create', 'ArticleController@create');
Route::post('/articles/{id}/edit', 'ArticleController@edit')->where('id', '[0-9]+');
