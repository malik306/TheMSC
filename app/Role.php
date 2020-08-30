<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['title'];
    protected $table = 'roles';
    protected $dates = ['created_at', 'updated_at'];
}
