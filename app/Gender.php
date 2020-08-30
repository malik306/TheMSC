<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable = ['title'];
    protected $table = 'genders';
    protected $dates = ['created_at', 'updated_at'];
}
