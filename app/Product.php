<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';

    // 這些屬性能被批量賦值
    protected $fillable =[ 'id', 'name', 'category', 'price', 'discount', 'photo', 'whether', 'remark' ];

    // 取得擁有此產品的訂餐明細關聯。
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
