<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $guarded = [];
    protected $table = 'qualifications';
    protected $dates = ['created_at', 'updated_at'];
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
