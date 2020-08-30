<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $fillable =['title'];
    protected $table='series';

    public function user()
    {
        return $this->hasMany(User::class,'series_id');
    }
    protected $dates = ['created_at', 'updated_at'];

}
