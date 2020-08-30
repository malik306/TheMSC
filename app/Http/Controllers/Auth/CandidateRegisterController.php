<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CandidateRegisterController extends Controller
{
    use RegistersUsers;
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cnic' => ['bail','required', 'string','unique:users','regex:[\d]'],
            'password' => ['bail','required', 'string',],
        ]);
    }
    protected function create(array $data)
    {
        return User::create([
            'cnic' => $data['cnic'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected $redirectTo = RouteServiceProvider::User;
}
