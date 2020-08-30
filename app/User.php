<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;
    protected $guarded = [];
    protected $table='users';
    protected $with =['profile'];
    protected $hidden = ['password', 'remember_token',];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $dates = ['created_at', 'updated_at'];

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class,'user_id');
    }
}
