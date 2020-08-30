<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $guarded = [];
    //protected $fillable = ['topic','date','present','comment'];
    protected $table = 'attendances';
    protected $casts = ['date' => 'date:d-M-Y', ];
    protected $dates = ['created_at', 'updated_at','date'];

    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
