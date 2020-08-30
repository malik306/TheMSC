<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];
    protected $table = 'courses';
    protected $dates = ['created_at', 'updated_at'];
}
