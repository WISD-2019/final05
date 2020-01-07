# 系統擷取畫面
## 首頁
- 瀏覽相關的店家簡介、活動公告、產品介紹、聯絡資訊
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/%E9%A6%96%E9%A0%81.png)
## 產品介紹之頁面
- 顯示所有販賣之產品供顧客查看與購買
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/%E7%94%A2%E5%93%81%E4%BB%8B%E7%B4%B9.png)
## 訂餐之頁面
- 提供會員查看訂餐狀況以及新增、編輯和刪除訂餐資料
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/%E6%88%91%E7%9A%84%E8%A8%82%E9%A4%90.png)
## 新增訂位之頁面
- 提供會員新增訂位的資料(包括預定日期、預定時間、訂位人數和備註)
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/%E6%96%B0%E5%A2%9E%E8%A8%82%E4%BD%8D.png)
## 管理員帳戶管理之頁面
- 顯示、建立、編輯、刪除管理者和員工的資料
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/user.png)
## 管理員產品管理之頁面
- 顯示、建立、編輯、刪除產品的資料
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/product.png)
## 員工訂餐管理之頁面
- 顯示、建立、編輯、刪除訂餐的資料
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/order.png)
## 員工訂位管理之頁面
- 顯示、建立、編輯、刪除訂位的資料
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/reservation.png)

# 系統的名稱及作用

咖啡店線上訂位及訂餐系統

- 對使用者來說能縮短繁瑣的訂餐及訂位程序
- 提供使用者線上訂餐，減少產品出餐的等待時間

- 對員工來說能更方便訂位以及訂餐管理的整合
- 減少員工處理訂位和訂餐的程序

- 對管理者來說可以及時地將產品資料上市
- 方便管理帳戶資料

# 系統的主要功能
## 前台

- 首頁  [3A632065 蔡欣如](https://github.com/3A632065)
- 關於我們  [3A632065 蔡欣如](https://github.com/3A632065)
- 最新公告 [3A632065 蔡欣如](https://github.com/3A632065)
- 咖啡產品介紹 [3A632065 蔡欣如](https://github.com/3A632065)
- 其他產品介紹 [3A632065 蔡欣如](https://github.com/3A632065)
- 聯絡我們 [3A632065 蔡欣如](https://github.com/3A632065)
    - Route::get('/', function () {return view('coffee');});
    - Auth::routes();
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

會員

- 我的訂餐 [3A632065 蔡欣如](https://github.com/3A632065)
- 新增訂餐 [3A632065 蔡欣如](https://github.com/3A632065)
- 編輯訂餐 [3A632065 蔡欣如](https://github.com/3A632065)
- 儲存訂餐 [3A632065 蔡欣如](https://github.com/3A632065)
- 更新訂餐 [3A632065 蔡欣如](https://github.com/3A632065)
- 取消訂餐 [3A632065 蔡欣如](https://github.com/3A632065)
- 我的訂位 [3A632065 蔡欣如](https://github.com/3A632065)
- 新增訂位 [3A632065 蔡欣如](https://github.com/3A632065)
- 編輯訂位 [3A632065 蔡欣如](https://github.com/3A632065)
- 儲存訂位 [3A632065 蔡欣如](https://github.com/3A632065)
- 更新訂位 [3A632065 蔡欣如](https://github.com/3A632065)
- 取消訂位 [3A632065 蔡欣如](https://github.com/3A632065)

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
        Route::get('/{reservations}/cancel',['as' => 'member.myreservation.cancel', 'uses' => 'ReservationController@show']);
        Route::delete('/{id}'  , ['as' => 'member.myreservation.destroy', 'uses' => 'ReservationController@destroy']);
    });
    /*我的訂餐路由*/
    Route::group(['prefix' => 'myorder'], function() {
        Route::get('/'         , ['as' => 'member.myorder.index'  , 'uses' => 'OrderController@myorder']);
        //新增訂餐路由
        Route::get('/create'   , ['as' => 'member.myorder.create' , 'uses' => 'OrderController@create']);
        //編輯訂餐路由
        Route::get('/{id}/edit', ['as' => 'member.myorder.edit'   , 'uses' => 'OrderController@edit']);
        //儲存訂餐路由
        Route::post('/'        , ['as' => 'member.myorder.store'  , 'uses' => 'OrderController@store']);
        //設定更新訂餐路由
        Route::patch('/{id}'   , ['as' => 'member.myorder.update' , 'uses' => 'OrderController@update']);
        //設定刪除訂餐路由
        Route::get('/{orders}/cancel',['as' => 'member.myorder.cancel', 'uses' => 'OrderController@show']);
        Route::delete('/{id}'  , ['as' => 'member.myorder.destroy', 'uses' => 'OrderController@destroy']);
    });

##後台

- 主控台  [3A632059 林盈甄](https://github.com/3A632059)
- 管理員管理  [3A632059 林盈甄](https://github.com/3A632059)
- 新增管理員  [3A632059 林盈甄](https://github.com/3A632059)
- 編輯管理員  [3A632059 林盈甄](https://github.com/3A632059)
- 儲存管理員  [3A632059 林盈甄](https://github.com/3A632059)
- 更新管理員  [3A632059 林盈甄](https://github.com/3A632059)
- 刪除管理員  [3A632059 林盈甄](https://github.com/3A632059)
- 產品管理  [3A632059 林盈甄](https://github.com/3A632059)
- 新增產品  [3A632059 林盈甄](https://github.com/3A632059)
- 編輯產品  [3A632059 林盈甄](https://github.com/3A632059)
- 儲存產品  [3A632059 林盈甄](https://github.com/3A632059)
- 更新產品  [3A632059 林盈甄](https://github.com/3A632059)
- 刪除產品  [3A632059 林盈甄](https://github.com/3A632059)

    - Route::group(['prefix' => 'admin'], function() {
    - //後台路由
    - Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);
    - //後台管理員路由
    - Route::get('users'          , ['as' => 'admin.posts.index' , 'uses' => 'UsersController@index']);
    - //後台新增管理員路由
    - Route::get('users/create'   , ['as' => 'admin.posts.create', 'uses' => 'UsersController@create']);
    - //後台編輯管理員路由
    - Route::get('users/{id}/edit', ['as' => 'admin.posts.edit'  , 'uses' => 'UsersController@edit']);
    - //後台儲存管理員路由
    - Route::post('users'         , ['as' =>'admin.posts.store'  , 'uses' => 'UsersController@store']);
    - //後台更新管理員路由
    - Route::patch('users/{id}'   , ['as' => 'admin.posts.update', 'uses' => 'UsersController@update']);
    - //後台刪除管理員路由
    - Route::get('/users/{users}', 'UsersController@show')->name('admin.posts.delete');
    - Route::delete('users/{id}'  , ['as' =>'admin.posts.destroy', 'uses' => 'UsersController@destroy']);

    - //後台產品路由
    - Route::get('product'          , ['as' => 'admin.product.index' , 'uses' => 'ProductsController@index']);
    - //後台新增產品路由
    - Route::get('product/create'   , ['as' => 'admin.product.create', 'uses' => 'ProductsController@create']);
    - //後台編輯產品路由
    - Route::get('product/{id}/edit', ['as' => 'admin.product.edit'  , 'uses' => 'ProductsController@edit']);
    - //後台儲存產品路由
    - Route::post('product'         , ['as' =>'admin.product.store'  , 'uses' => 'ProductsController@store']);
    - //後台更新產品路由
    - Route::patch('product/{id}'   , ['as' => 'admin.product.update', 'uses' => 'ProductsController@update']);
    - //後台刪除產品路由
    - Route::get('/product/{products}', 'ProductsController@show')->name('admin.product.delete');
    - Route::delete('product/{id}',['as'=>'admin.product.destroy','uses'=>'ProductsController@destroy']);
    });

員工

- 員工主控台  [3A632059 林盈甄](https://github.com/3A632059)
- 員工管理  [3A632059 林盈甄](https://github.com/3A632059)
- 新增訂位  [3A632059 林盈甄](https://github.com/3A632059)
- 編輯訂位  [3A632059 林盈甄](https://github.com/3A632059)
- 儲存訂位  [3A632059 林盈甄](https://github.com/3A632059)
- 更新訂位  [3A632059 林盈甄](https://github.com/3A632059)
- 刪除訂位  [3A632059 林盈甄](https://github.com/3A632059)
- 訂餐管理  [3A632059 林盈甄](https://github.com/3A632059)
- 新增訂餐  [3A632059 林盈甄](https://github.com/3A632059)
- 編輯訂餐  [3A632059 林盈甄](https://github.com/3A632059)
- 儲存訂餐  [3A632059 林盈甄](https://github.com/3A632059)
- 更新訂餐  [3A632059 林盈甄](https://github.com/3A632059)
- 刪除訂餐  [3A632059 林盈甄](https://github.com/3A632059)

    - Route::group(['prefix' => 'staff'], function() {
    - //員工路由
    - Route::get('/', ['as' => 'staff.dashboard.index', 'uses' => 'StaffDashboardController@index']);
    - //員工訂位路由
    - Route::get('reservation'          , ['as' => 'staff.reservation.index' , 'uses' => 'StaffreservationController@index']);
    - //員工新增訂位路由
    - Route::get('reservation/create'   , ['as' => 'staff.reservation.create', 'uses' => 'StaffreservationController@create']);
    - //員工編輯訂位路由
    - Route::get('reservation/{id}/edit', ['as' => 'staff.reservation.edit'  , 'uses' => 'StaffreservationController@edit']);
    - //員工儲存訂位路由
    - Route::post('reservation'         , ['as' =>'staff.reservation.store'  , 'uses' => 'StaffreservationController@store']);
    - //員工更新訂位路由
    - Route::patch('reservation/{id}'   , ['as' => 'staff.reservation.update', 'uses' => 'StaffreservationController@update']);
    - //員工查看訂位
    - Route::get('/reservation/{reservation}', 'StaffreservationController@show')->name('staff.reservation.detail');

    - //員工訂餐路由
    - Route::get('order'          , ['as' => 'staff.order.index' , 'uses' => 'StafforderController@index']);
    - //員工新增訂餐路由
    - Route::get('order/create'   , ['as' => 'staff.order.create', 'uses' => 'StafforderController@create']);
    - //員工編輯訂餐路由
    - Route::get('order/{id}/edit', ['as' => 'staff.order.edit'  , 'uses' => 'StafforderController@edit']);
    - //員工儲存訂餐路由
    - Route::post('order'         , ['as' =>'staff.order.store'  , 'uses' => 'StafforderController@store']);
    - //員工更新訂餐路由
    - Route::patch('order/{id}'   , ['as' => 'staff.order.update', 'uses' => 'StafforderController@update']);
    - //員工查看訂餐
    - Route::get('/order/{order}', 'StafforderController@show')->name('staff.order.detail');
    });

## ERD
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/ERD.png)

## 關聯式綱要圖
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/%E9%97%9C%E8%81%AF%E5%BC%8F%E7%B6%B1%E8%A6%81%E5%9C%96.PNG)

## 資料表欄位設計
 - 使用者
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/%E4%BD%BF%E7%94%A8%E8%80%85%E8%B3%87%E6%96%99%E8%A1%A8%E6%AC%84%E4%BD%8D%E8%A8%AD%E8%A8%88.png)
 - 產品
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/%E7%94%A2%E5%93%81%E8%B3%87%E6%96%99%E8%A1%A8%E6%AC%84%E4%BD%8D%E8%A8%AD%E8%A8%88.png)
 - 訂餐
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/%E8%A8%82%E9%A4%90%E8%B3%87%E6%96%99%E8%A1%A8%E6%AC%84%E4%BD%8D%E8%A8%AD%E8%A8%88.png)
 - 訂餐明細
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/%E8%A8%82%E9%A4%90%E6%98%8E%E7%B4%B0%E8%B3%87%E6%96%99%E8%A1%A8%E6%AC%84%E4%BD%8D%E8%A8%AD%E8%A8%88.png)
 - 訂位
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/%E8%A8%82%E4%BD%8D%E8%B3%87%E6%96%99%E8%A1%A8%E6%AC%84%E4%BD%8D%E8%A8%AD%E8%A8%88.png)
 - 訂位明細
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/%E8%A8%82%E4%BD%8D%E6%98%8E%E7%B4%B0%E8%B3%87%E6%96%99%E8%A1%A8%E6%AC%84%E4%BD%8D%E8%A8%AD%E8%A8%88.png)
 - 桌位
![image](https://raw.githubusercontent.com/WISD-2019/final05/master/readme_picture/%E6%A1%8C%E4%BD%8D%E8%B3%87%E6%96%99%E8%A1%A8%E6%AC%84%E4%BD%8D%E8%A8%AD%E8%A8%88.png)


# 初始專案與DB負責的同學

- 初始專案 [3A63205 蔡欣如](https://github.com/3A632065)

- 資料庫及資料表建立、資料表關連  [3A632065 蔡欣如](https://github.com/3A632065) [3A632059 林盈甄](https://github.com/3A632059)

# 額外使用的套件或樣板

- 前台樣板- [Grayscale](https://startbootstrap.com/previews/grayscale/)

  樣板設計清新脫俗，很適合搭配此系統的頁面設計，且能夠方便使用者進行點擊查看

- 後台樣板-[Side Bar](https://startbootstrap.com/templates/simple-sidebar/)

  為製做簡易操作介面，讓管理者輕鬆使用

# 系統復原步驟

複製https://github.com/WISD-2019/final05.git本系統在GitHub的專案，打開 Source tree，點選 Clone 後，輸入以下資料

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

# 系統使用者測試帳號

## 前台 - 使用者

- 帳號： QQ523698741@yahoo.com.tw

- 密碼： q1357986

## 後台 - 管理者

- 帳號： s3A632059@gm.student.ncut.edu.tw

- 密碼： 3a632059

- 帳號： 3A632065@gm.student.ncut.edu.tw

- 密碼： j222913650


# 系統開發人員與工作分配

## [3A632059 林盈甄](https://github.com/3A632059)
  - 設計員工查看訂餐的名單及頁面
  - 設計員工處理的訂餐名單
  - 設計員工查看預約的名單及頁面
  - 設計員工處理的訂位入座
  - 設計管理員新增帳號密碼
  - 設計管理員編輯帳號密碼
  - 設計管理員刪除帳號密碼
  - 設計管理員新增產品
  - 設計管理員編輯產品
  - 設計管理員刪除產品
  - 系統測試
  - readme編寫和排版
  
## [3A632065 蔡欣如](https://github.com/3A632065)
  - 設計咖啡店的首頁
  - 設計咖啡店的咖啡產品頁面
  - 設計咖啡店的其他產品頁面
  - 設計咖啡店簡介頁面
  - 設計咖啡店的聯絡資訊頁面
  - 設計咖啡店的活動公告頁面
  - 設計會員查看的訂位情況及頁面
  - 設計會員新增訂位
  - 設計會員編輯訂位
  - 設計會員刪除訂位
  - 設計會員查看的訂餐情況及頁面
  - 設計會員新增訂餐
  - 設計會員編輯訂餐
  - 設計會員刪除訂餐
  - 系統測試
  - readme編寫和排版

    
    
