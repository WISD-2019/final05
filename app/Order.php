<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    // 這些屬性能被批量賦值
    public $fillable = [ 'name', 'user_id', 'finish', 'time', 'remark' ];

    // 取得擁有此訂餐的使用者。
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 取得擁有此訂餐的訂餐明細。
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
