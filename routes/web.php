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


//前台

Route::get('/', function () {

    return view('coffee');

});

Auth::routes();
/*首頁*/
Route::get('/home', 'HomeController@index')->name('home');

/*公告路由*/
Route::get('/news',['as'=>'news.index','uses'=> 'CofeController@news']);
/*咖啡產品路由*/
Route::get('/products',['as'=>'product.index','uses'=> 'CofeController@product']);
/*其他產品路由*/
Route::get('/other',['as'=>'other.index','uses'=> 'CofeController@other']);
/*關於我們(簡介)路由*/
Route::get('/about',['as'=>'about.index','uses'=> 'CofeController@about']);
/*聯絡我們路由*/
Route::get('/contect',['as'=>'contect.index','uses'=> 'CofeController@contect']);

//會員

/*我的訂餐路由*/
Route::get('/myorder',['as'=>'myorder.index','uses'=> 'OrderController@myorder']);
/*我的訂位路由*/
Route::get('/myreservation',['as'=>'myreservation.index','uses'=> 'ReservationController@myreservation']);


//後台
