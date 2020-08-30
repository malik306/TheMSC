<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAttendance extends Controller
{
    public function index()
    {
        $self=User::find(Auth::id());
        $present=$self->profile->attendance()->where('present','p')->count();
        $absent=$self->profile->attendance()->where('present','a')->count();
        $leave=$self->profile->attendance()->where('present','l')->count();
        $short=$self->profile->attendance()->where('present','sl')->count();
        $title='Student attendance';
        return view('student.attendance.index',compact('title','self','present','absent','leave','short'));
    }
}
