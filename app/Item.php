<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // 這些屬性能被批量賦值
    public $fillable = [ 'id', 'order_id','user_id', 'product_id', 'count' ];

    // 取得擁有此訂餐明細的訂餐。
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // 取得擁有此訂餐明細的使用者。
    public function users()
    {
        return $this->hasMany(Order::class);
    }

    // 取得擁有此訂餐明細的產品。
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
