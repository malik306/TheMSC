<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendanceType extends Model
{
    protected $guarded = [];
    protected $table = 'attendance_types';
    protected $dates = ['created_at', 'updated_at'];
}
