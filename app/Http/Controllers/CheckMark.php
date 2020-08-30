<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckMark extends Controller
{
    public function index()
    {
        $self=User::find(Auth::id());
        $title='Student Marks';
        return view('student.Marks.index',compact('self','title'));
    }
}
