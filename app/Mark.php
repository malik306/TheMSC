<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $guarded =[];
    protected $table = 'marks';
    protected $dates = ['created_at', 'updated_at'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
