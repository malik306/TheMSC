<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CandidateController extends Controller
{
    use AuthenticatesUsers;

    protected function guard()
    {
        return Auth::guard('user');
    }

    public function logout()
    {
        Auth::logout();
        //session()->flush();
        alert()->success('You have been logout successfully','User GoodBye');
        return redirect('/');
    }

    public function username()
    {
        return 'cnic';
    }

    public function login(Request $request){
        if (DB::table('users')->where('cnic',$request->get('cnic'))->doesntExist()){
            $data= new CandidateRegisterController();
            return $data->register($request);
        }
        else{
            if (DB::table('users')->where('cnic',$request->get('cnic'))->exists()){
                if (Auth::guard('user')->attempt(['cnic' => $request->get('cnic'),'password' => $request->get('password')])){
                    return redirect('/user');
                }
            }
        }
    }

}
