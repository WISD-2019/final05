<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    // 這些屬性能被批量賦值
    public $fillable = [ 'id', 'reservation_id', 'table_id' ];

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
