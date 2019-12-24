<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    // 取得擁有此訂位明細的桌位。
    public function tables()
    {
        return $this->hasMany(Table::class);
    }

    // 取得擁有此訂位明細的訂位。
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
