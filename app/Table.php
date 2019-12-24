<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    //取得擁有此桌位的訂位明細。
    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }
}
