<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

系統的作用
線上訂位、候位系統

讓使用者透過此系統的簡單操作就可提前訂位，使用者還可指定預約自己喜歡的位子
讓使用者透過此系統的簡單操作就可進行線上候位，不必到現場就能候位，節省等待的時間
讓使用者隨時掌握候位的最新狀況
讓管理者在一套系統裡就可管控所有顧客的訂位、候位資料
系統的主要功能
前台

線上訂位(Route::get('/reservations'))3A532083 劉宜樺、3A532085 江珮妤
預約訂位人數、訂位日期(Route::get('/stepone'))3A532083 劉宜樺、3A532085 江珮妤
預約訂位時段(Route::post('/step2/{id}'))3A532083 劉宜樺、3A532085 江珮妤
預約座位(Route::patch('/section2/{id}'))3A532085 江珮妤
查詢訂位(Route::post('/reservation'))3A532083 劉宜樺
刪除訂位(Route::delete('/reservation/{reservation}'))3A532083 劉宜樺
線上候位(Route::get('/insertwait/{id}'))3A532085 江珮妤
查詢候位(Route::get('searchwait'))3A532085 江珮妤
刪除候位(Route::delete('/wait/{wait}'))3A532085 江珮妤
後台

查看預約組數和候位組數(Route::get('count'))3A532085 江珮妤
更改訂位狀態(Route::patch('/reservation/status/{id}'))3A532085 江珮妤
更改候位狀態(Route::patch('/wait/status/{id}'))3A532085 江珮妤
店家叫號(Route::patch('/num/{id}'))3A532085 江珮妤
設定等候時間(Route::patch('/time/{id}'))3A532085 江珮妤
初始專案與DB負責的同學
初始專案 3A532085 江珮妤
資料庫及資料表建立、資料表關連 3A532085 江珮妤
額外使用的套件或樣板
前台樣板-Clean Blog

使畫面看起來不單調，讓此系統深受使用者喜愛
後台樣板-Side Bar

為製做簡易操作介面，讓管理者輕鬆使用
系統復原步驟
複製https://github.com/WISD-2018/final09.git本系統在GitHub的專案，打開Source tree，點選clone後，輸入以下資料

Source Path:https://github.com/WISD-2018/final09.git
Destination Path:C:\wagon\uwamp\www\final09
打開cmder，切換至專案所在資料夾，cd final09

在cmder輸入以下命令，以復原此系統：

composer install
composer run‐script post‐root‐package‐install
composer run‐script post‐create‐project‐cmd
將專案打開 在.env檔案內輸入資料庫主機IP、Port、名稱、與帳密如下：

DB_HOST=127.0.0.1
DB_PORT=33060
DB_DATABASE=final09
DB_USERNAME=root
DB_PASSWORD=root
在cmder輸入以下命令，將所有資料表產生至final09資料庫內

php artisan migrate
開啟UwAmp，點選PHPMyAdmin，輸入以下資料後並點擊登入，進入MySQL後，建立新資料庫，名稱為final09，將final09.sql(C:\wagon\uwamp\www\final09\database\final09.sql)匯入

資料庫系統:MYSQL
伺服器:localhost:33060
帳號:root
密碼:root
在UwAmp下，點選Apache config，選擇port 8000 ，並在Document Root 輸入{DOCUMENTPATH}/final09/public

系統使用帳號
前台-使用者

帳號:456@gmail.com

密碼:123456

帳號:789@gmail.com

密碼:123456

後台-管理者

帳號:root@gmail.com
密碼:123456
系統開發人員
3A532083 劉宜樺
3A532085 江珮妤
