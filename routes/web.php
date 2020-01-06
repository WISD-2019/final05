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

/*我的訂位路由*/
Route::group(['prefix' => 'myreservation'], function() {
    Route::get('/'         , ['as' => 'member.myreservation.index'  , 'uses' => 'ReservationController@myreservation']);
    //新增訂位路由
    Route::get('/create'   , ['as' => 'member.myreservation.create' , 'uses' => 'ReservationController@create']);
    //編輯訂位路由
    Route::get('/{id}/edit', ['as' => 'member.myreservation.edit'   , 'uses' => 'ReservationController@edit']);
    //儲存訂位路由
    Route::post('/'        , ['as' => 'member.myreservation.store'  , 'uses' => 'ReservationController@store']);
    //設定更新訂位路由
    Route::patch('/{id}'   , ['as' => 'member.myreservation.update' , 'uses' => 'ReservationController@update']);
    //設定刪除訂位路由
    Route::delete('/{id}'  , ['as' => 'member.myreservation.destroy', 'uses' => 'ReservationController@destroy']);
});

/*我的訂餐路由*/
Route::group(['prefix' => 'myorder'], function() {
    Route::get('/'         , ['as' => 'member.myorder.index'  , 'uses' => 'OrderController@myorder']);
    //Route::get('/'         , ['as' => 'member.myorder.index'  , 'uses' => 'ItemController@index']);
    //新增訂餐路由
    Route::get('/create'   , ['as' => 'member.myorder.create' , 'uses' => 'OrderController@create']);
    //編輯訂餐路由
    Route::get('/{id}/edit', ['as' => 'member.myorder.edit'   , 'uses' => 'OrderController@edit']);
    //儲存訂餐路由
    Route::post('/'        , ['as' => 'member.myorder.store'  , 'uses' => 'OrderController@store']);
    //設定更新訂餐路由
    Route::patch('/{id}'   , ['as' => 'member.myorder.update' , 'uses' => 'OrderController@update']);
    //設定刪除訂餐路由
    Route::delete('/{id}'  , ['as' => 'member.myorder.destroy', 'uses' => 'OrderController@destroy']);
});

//後台

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);

    Route::get('users'          , ['as' => 'admin.posts.index' , 'uses' => 'UsersController@index']);
    Route::get('users/create'   , ['as' => 'admin.posts.create', 'uses' => 'UsersController@create']);
    Route::get('users/{id}/edit', ['as' => 'admin.posts.edit'  , 'uses' => 'UsersController@edit']);
    Route::post('users'         , ['as' =>'admin.posts.store'  , 'uses' => 'UsersController@store']);
    Route::patch('users/{id}'   , ['as' => 'admin.posts.update', 'uses' => 'UsersController@update']);
    Route::delete('users/{id}'  , ['as' =>'admin.posts.destroy', 'uses' => 'UsersController@destroy']);


    Route::get('product'          , ['as' => 'admin.product.index' , 'uses' => 'ProductsController@index']);
    Route::get('product/create'   , ['as' => 'admin.product.create', 'uses' => 'ProductsController@create']);
    Route::get('product/{id}/edit', ['as' => 'admin.product.edit'  , 'uses' => 'ProductsController@edit']);
    Route::post('product'         , ['as' =>'admin.product.store'  , 'uses' => 'ProductsController@store']);
    Route::patch('product/{id}'   , ['as' => 'admin.product.update', 'uses' => 'ProductsController@update']);


});
