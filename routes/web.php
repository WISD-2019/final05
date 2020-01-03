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


Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);

    Route::get('users'          , ['as' => 'admin.posts.index' , 'uses' => 'UsersController@index']);
    Route::get('users/create'   , ['as' => 'admin.posts.create', 'uses' => 'UsersController@create']);
    Route::get('users/{id}/edit', ['as' => 'admin.posts.edit'  , 'uses' => 'UsersController@edit']);
    Route::post('users',['as'=>'admin.posts.store','uses'=> 'UsersController@store']);
    Route::patch('users/{id}'   , ['as' => 'admin.posts.update', 'uses' => 'UsersController@update']);
    Route::delete('users/{id}',['as'=>'admin.posts.destroy','uses'=>'UsersController@destroy']);


    Route::get('product'          , ['as' => 'admin.product.index' , 'uses' => 'ProductsController@index']);
    Route::get('product/create'   , ['as' => 'admin.product.create', 'uses' => 'ProductsController@create']);
    Route::get('product/{id}/edit', ['as' => 'admin.product.edit'  , 'uses' => 'ProductsController@edit']);
    Route::post('product',['as'=>'admin.product.store','uses'=> 'ProductsController@store']);
    Route::patch('product/{id}'   , ['as' => 'admin.product.update', 'uses' => 'ProductsController@update']);
    

});
