<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $guarded = [];
    protected $table = 'carousels';
    protected $dates = ['created_at', 'updated_at'];
}
