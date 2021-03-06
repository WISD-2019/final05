<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'type', 'phone', 'id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        ];

    // 取得該使用者的所有訂餐。
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // 取得該使用者的所有訂位。
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    // 取得該使用者的所有訂餐明細。
    public function items()
    {
        return $this->hasMany(Item::class);
    }


}
