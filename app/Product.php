<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // 取得擁有此產品的訂餐明細。
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
