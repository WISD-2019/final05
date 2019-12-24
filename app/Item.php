<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // 取得擁有此訂餐明細的訂餐。
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // 取得擁有此訂餐明細的產品。
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
