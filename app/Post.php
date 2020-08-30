<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title'];
    protected $table = 'posts';
    protected $dates = ['created_at', 'updated_at'];
}
