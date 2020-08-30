<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function username()
    {
        return 'user_name';
    }
    protected function redirectTo(){
        if (Auth::user()->user_role == 'admin' && Auth::user()->status == 1){
            //alert()->message('Welcome','Admin')->closeOnClickOutside();
            return '/admin';
        }
        elseif (Auth::user()->user_role == 'employee' && Auth::user()->status == 1){
            //dd();
            //alert()->message('Welcome','Faculty')->closeOnClickOutside();
        return '/faculty';
        }
        elseif (Auth::user()->user_role == 'student' && Auth::user()->status == 1){
            //alert()->message('Welcome','Student')->closeOnClickOutside();
            return '/students';
        }
        else
            return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        //session()->flash('msg_logout', 'Panel System Successfully Logout');
        alert()->success('You have been logout successfully','GoodBye');
        //session()->flush();
        return redirect('/login');
    }
    public function showLoginForm(){
        $title='TheMSC-Sign-In Panel-System';
        return view('log-in',compact('title'));
    }
}
