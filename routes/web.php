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

//後台

Route::group(['prefix' => 'admin'], function() {
    //後台路由
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);
    //查詢產品路由
    Route::get('search', ['as' => 'admin.dashboard.search', 'uses' => 'AdminDashboardController@search']);

    //後台管理員路由
    Route::get('users'          , ['as' => 'admin.posts.index' , 'uses' => 'UsersController@index']);
    //後台新增管理員路由
    Route::get('users/create'   , ['as' => 'admin.posts.create', 'uses' => 'UsersController@create']);
    //後台編輯管理員路由
    Route::get('users/{id}/edit', ['as' => 'admin.posts.edit'  , 'uses' => 'UsersController@edit']);
    //後台儲存管理員路由
    Route::post('users'         , ['as' =>'admin.posts.store'  , 'uses' => 'UsersController@store']);
    //後台更新管理員路由
    Route::patch('users/{id}'   , ['as' => 'admin.posts.update', 'uses' => 'UsersController@update']);
    //後台刪除管理員路由
    Route::get('/users/{users}', 'UsersController@show')->name('admin.posts.delete');
    Route::delete('users/{id}'  , ['as' =>'admin.posts.destroy', 'uses' => 'UsersController@destroy']);

    //後台產品路由
    Route::get('product'          , ['as' => 'admin.product.index' , 'uses' => 'ProductsController@index']);
    //後台新增產品路由
    Route::get('product/create'   , ['as' => 'admin.product.create', 'uses' => 'ProductsController@create']);
    //後台編輯產品路由
    Route::get('product/{id}/edit', ['as' => 'admin.product.edit'  , 'uses' => 'ProductsController@edit']);
    //後台儲存產品路由
    Route::post('product'         , ['as' =>'admin.product.store'  , 'uses' => 'ProductsController@store']);
    //後台更新產品路由
    Route::patch('product/{id}'   , ['as' => 'admin.product.update', 'uses' => 'ProductsController@update']);
    //後台刪除產品路由
    Route::get('/product/{products}', 'ProductsController@show')->name('admin.product.delete');
    Route::delete('product/{id}',['as'=>'admin.product.destroy','uses'=>'ProductsController@destroy']);

});

//員工
Route::group(['prefix' => 'staff'], function() {
    //員工路由
    Route::get('/', ['as' => 'staff.dashboard.index', 'uses' => 'StaffDashboardController@index']);

    //員工訂位路由
    Route::get('reservation'          , ['as' => 'staff.reservation.index' , 'uses' => 'StaffreservationController@index']);
    //員工新增訂位路由
    Route::get('reservation/create'   , ['as' => 'staff.reservation.create', 'uses' => 'StaffreservationController@create']);
    //員工編輯訂位路由
    Route::get('reservation/{id}/edit', ['as' => 'staff.reservation.edit'  , 'uses' => 'StaffreservationController@edit']);
    //員工儲存訂位路由
    Route::post('reservation'         , ['as' =>'staff.reservation.store'  , 'uses' => 'StaffreservationController@store']);
    //員工更新訂位路由
    Route::patch('reservation/{id}'   , ['as' => 'staff.reservation.update', 'uses' => 'StaffreservationController@update']);


    //員工訂餐路由
    Route::get('order'          , ['as' => 'staff.order.index' , 'uses' => 'StafforderController@index']);
    //員工新增訂餐路由
    Route::get('order/create'   , ['as' => 'staff.order.create', 'uses' => 'StafforderController@create']);
    //員工編輯訂餐路由
    Route::get('order/{id}/edit', ['as' => 'staff.order.edit'  , 'uses' => 'StafforderController@edit']);
    //員工儲存訂餐路由
    Route::post('order'         , ['as' =>'staff.order.store'  , 'uses' => 'StafforderController@store']);
    //員工更新訂餐路由
    Route::patch('order/{id}'   , ['as' => 'staff.order.update', 'uses' => 'StafforderController@update']);


});

