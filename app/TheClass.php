<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheClass extends Model
{
    protected $guarded = [];
    protected $table = 'classes';
    protected $dates = ['created_at', 'updated_at'];

    public function profile()
    {
        return $this->belongsToMany(Profile::class,'class_profile','class_id','profile_id')->withTimestamps();
    }
}
