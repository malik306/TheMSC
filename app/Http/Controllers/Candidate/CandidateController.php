<?php

namespace App\Http\Controllers\Candidate;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{
    public function edit($id)
    {
            $candidate=User::find($id); //pass the value in the input fields
            $AuthID=Auth::id();//pass the value in the action
            return view('user.candidate.edit',compact('candidate','AuthID'));
    }
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            //'email'   => 'required|string|unique:users|email:filter,dns'.$id,
            'email'   => 'required|string|unique:users|email:filter,dns',
            'user_role'=>'required'
        ]);
        $candidate= User::where('id',$id)->find($id);
            $candidate->user_role=$request->user_role;
            $candidate->email=$request->email;
            $candidate->save();
            return redirect('/user/index')->with('success','Candidate Record will be updated successfully');
    }
}
