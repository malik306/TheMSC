<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];
    protected $table = 'profiles';
    protected $dates = ['created_at', 'updated_at'];
    //protected $with =['attendance'];
    public function experience(){
        return $this->hasMany(Experience::class,'profile_id');
    }
    public function material()
    {
        return $this->hasMany(Material::class,'profile_id');
    }

    public function mark()
    {
        return $this->hasMany(Mark::class,'profile_id');
    }
    public function assignment()
    {
        return $this->hasMany(Assignment::class,'profile_id');
    }
    public function qualification(){
        return $this->hasMany(Qualification::class,'profile_id');
    }
    public function attendance()
    {
        return $this->hasMany(Attendance::class,'profile_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function theClass()
    {
        return $this->belongsToMany(TheClass::class,'class_profile','profile_id','class_id')->withTimestamps();
    }
}
