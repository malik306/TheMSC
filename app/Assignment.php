<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $guarded =[];
    protected $table = 'assignments';
    protected $dates = ['created_at', 'updated_at'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
