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
    return view('coffee');
});

Route::get('/news',['as'=>'news.index','uses'=> 'NewsController@index']);

Route::get('/products',['as'=>'product.index','uses'=> 'ProductController@index']);

Route::get('/about',['as'=>'about.index','uses'=> 'AboutController@index']);

Route::get('/contect',['as'=>'contect.index','uses'=> 'ContectController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
