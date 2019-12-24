<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    // 取得擁有此訂位的使用者。
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 取得擁有此訂位的訂位明細。
    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }
}
