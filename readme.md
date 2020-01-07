<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## 系統的作用

線上訂房系統

- 讓使用者透過此系統的簡單操作就可進行線上訂房
- 讓使用者了解民宿
- 讓管理者在一套系統裡就可管控所有顧客及訂房資料


## 系統的主要功能
前台

- 最新消息(Route::get('post', function () {return view('bootstarap.post');}))   [3A632068 彭惠昕](https://github.com/3A632068)
- 關於我們(Route::get('about', function () {    return view('bootstarap.about');})   [3A632068 彭惠昕](https://github.com/3A632068)
- 交通(Route::get('traffic', function () { return view('bootstarap.traffic');})   [3A632068 彭惠昕](https://github.com/3A632068)
- 房型 (Route::get('room', 'RoomController@index')) [3A632068 彭惠昕](https://github.com/3A632068)
- 房型詳細資料 (Route::get('/room/{room}', 'RoomController@show'))   [3A632068 彭惠昕](https://github.com/3A632068)
- 留言 (Route::get('/comment', 'CommentController@index'))   [3A632068 彭惠昕](https://github.com/3A632068)
- 購物車 (Route::get('/cart', 'CartController@index'))   [3A632068 彭惠昕](https://github.com/3A632068)

後台

- 主控台[3A632059 林盈甄](https://github.com/3A632059)
- 管理員管理[3A632059 林盈甄](https://github.com/3A632059)
- 新增管理員[3A632059 林盈甄](https://github.com/3A632059)
- 編輯管理員[3A632059 林盈甄](https://github.com/3A632059)
- 儲存管理員[3A632059 林盈甄](https://github.com/3A632059)
- 更新管理員[3A632059 林盈甄](https://github.com/3A632059)
- 刪除管理員[3A632059 林盈甄](https://github.com/3A632059)
- 產品管理[3A632059 林盈甄](https://github.com/3A632059)
- 新增產品[3A632059 林盈甄](https://github.com/3A632059)
- 編輯產品[3A632059 林盈甄](https://github.com/3A632059)
- 儲存產品[3A632059 林盈甄](https://github.com/3A632059)
- 更新產品[3A632059 林盈甄](https://github.com/3A632059)
- 刪除產品[3A632059 林盈甄](https://github.com/3A632059)

    Route::group(['prefix' => 'admin'], function() {
    //後台路由
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);

    
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




員工

- 員工主控台[3A632059 林盈甄](https://github.com/3A632059)
- 員工管理[3A632059 林盈甄](https://github.com/3A632059)
- 新增訂位[3A632059 林盈甄](https://github.com/3A632059)
- 編輯訂位[3A632059 林盈甄](https://github.com/3A632059)
- 儲存訂位[3A632059 林盈甄](https://github.com/3A632059)
- 更新訂位[3A632059 林盈甄](https://github.com/3A632059)
- 刪除訂位[3A632059 林盈甄](https://github.com/3A632059)
- 訂餐管理[3A632059 林盈甄](https://github.com/3A632059)
- 新增訂餐[3A632059 林盈甄](https://github.com/3A632059)
- 編輯訂餐[3A632059 林盈甄](https://github.com/3A632059)
- 儲存訂餐[3A632059 林盈甄](https://github.com/3A632059)
- 更新訂餐[3A632059 林盈甄](https://github.com/3A632059)
- 刪除訂餐[3A632059 林盈甄](https://github.com/3A632059)


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
    //員工查看訂位
    Route::get('/reservation/{reservation}', 'StaffreservationController@show')->name('staff.reservation.detail');


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
    //員工查看訂餐
    Route::get('/order/{order}', 'StafforderController@show')->name('staff.order.detail');


});



## 初始專案與DB負責的同學


- 初始專案 [3A632068 彭惠昕](https://github.com/3A632068)

- 資料庫及資料表建立、資料表關連  [3A632055 姚佳心](https://github.com/3A632055) [3A632068 彭惠昕](https://github.com/3A632068)

## 額外使用的套件或樣板

- 前台樣板- [Clean Blog](https://startbootstrap.com/themes/clean-blog/)

使畫面看起來不單調，讓此系統深受使用者喜愛

- 後台樣板-[Side Bar](https://startbootstrap.com/templates/simple-sidebar/)

為製做簡易操作介面，讓管理者輕鬆使用

## 系統復原步驟

複製https://github.com/WISD-2019/final05.git本系統在GitHub的專案，打開Source tree，點選clone後，輸入以下資料

Source Path:https://github.com/WISD-2019/final05.git
Destination Path:C:\wagon\uwamp\www\final05
打開cmder，切換至專案所在資料夾，cd final05

在cmder輸入以下命令，以復原此系統：

composer install
composer run‐script post‐root‐package‐install
composer run‐script post‐create‐project‐cmd
將專案打開 在.env檔案內輸入資料庫主機IP、Port、名稱、與帳密如下：

。DB_HOST=127.0.0.1

。DB_PORT=33060

。DB_DATABASE=cofe

。DB_USERNAME=root

。DB_PASSWORD=root

在cmder輸入以下命令，將所有資料表產生至final05資料庫內

php artisan migrate
開啟UwAmp，點選PHPMyAdmin，輸入以下資料後並點擊登入，進入MySQL後，建立新資料庫，名稱為cofe，將cofe.sql(C:\wagon\uwamp\www\final03\database\cofe.sql)匯入

。資料庫系統:MYSQL

。伺服器:localhost:33060

。帳號:root

。密碼:root

在UwAmp下，點選Apache config，選擇port 8000 ，並在Document Root 輸入{DOCUMENTPATH}/final05/public

## 系統使用帳號

前台-使用者

- 帳號:

- 密碼:

後台-管理者

- 帳號:
- 密碼:

## 系統開發人員

- [3A632059 林盈甄](https://github.com/3A632059)

- [3A632065 蔡欣如](https://github.com/3A632065)
