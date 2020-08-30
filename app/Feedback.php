<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $guarded = [];
    protected $table = 'feedback';
    protected $dates = ['created_at', 'updated_at'];
}
