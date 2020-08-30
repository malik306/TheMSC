<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $guarded = [];
    protected $table = 'experiences';
    protected $dates = ['created_at', 'updated_at'];

    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
