<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = ['title'];
    protected $table = 'provinces';
    protected $dates = ['created_at', 'updated_at'];
}
