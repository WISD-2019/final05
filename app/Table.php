<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    // 這些屬性能被批量賦值
    public $fillable = [ 'id', 'count' ];

    //取得擁有此桌位的訂位明細。
    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }
}
