<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers ;
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cnic' => ['required','string'],
            /*'post' => [ 'required','string'],
            'image' => [ 'required','string'],
            'objective'=> [ 'required','string'],
            'father_name' => [ 'required','string'],
            'date_of_birth' => [ 'required','string'],
            'religion' => [ 'required','string'],
            'domicile' => [ 'required','string'],
            'gender' => [ 'required','string'],
            'province' => [ 'required','string'],
            'address' => [ 'required','string'],
            'nationality' => [ 'required','string'],
            'phone'=>[ 'required','string','regex:[\d +-]'],
            'full_name' => [ 'required', 'string','regex:[a-z A-Z]'],*/
            'user_name'=>[ 'required','string','unique:users','regex:[a-z\d-]'],
            'user_role'=>[ 'required','string'],
            'email' => [ 'required', 'string', 'email:filter,dns'],
            'password' => [ 'required', 'string', 'confirmed','regex:[a-zA-Z\d $&+,:;=?@#|\'<>.^*()%!-]'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'cnic' => $data['cnic'],
            /*'post' => $data['post'],
            'image' => $data['image'],
            'objective' => $data['objective'],
            'father_name' => $data['father_name'],
            'date_of_birth' => $data['date_of_birth'],
            'religion' => $data['religion'],
            'domicile' => $data['domicile'],
            'gender' => $data['gender'],
            'province' => $data['province'],
            'address' => $data['address'],
            'nationality' => $data['nationality'],
            'full_name' => $data['full_name'],
            'phone' => $data['phone'],*/
            'user_name' => $data['user_name'],
            'user_role' => $data['user_role'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

    }


}
