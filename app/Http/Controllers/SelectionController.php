<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use App\TheClass;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SelectionController extends Controller
{
    public function index()
    {
        $title='Employee Selection Details';
        $user=User::where('user_role','employee')->orderBy('cnic','asc')->get();
        return view('admin.selection.employee.index',compact('title','user'));
    }

    public function show($id,Request $request)
    {
        if (! $request->ajax()){
            $title='Employee Selection Process';
            $class=TheClass::all();
            return view('admin.selection.employee.show',compact('title','class','id'));
        }
        if($request->ajax()){
            $profile=Profile::find($id);
            $class=TheClass::all();
            $user=User::where('user_role','student')->get();
            return  response()->json(['profile'=>$profile,'class'=>$class,'user'=>$user]);
        }
    }

    public function pivotCreate(Request $request)
    {
        //dd($request);
        $profile = Profile::find($request->p_id);
        $success_or_fail=$profile->theClass()->attach($request->c_id);
        return redirect()->route('selection.show',$profile)->with('success',$success_or_fail);
    }
    public function pivotDestroy($id,Request $request)
    {
        //dd($request);
        $profile = Profile::find($request->p_id);
        $success_or_fail=$profile->theClass()->detach();//required to pass class id
        return redirect()->route('selection.show',$profile)->with('success',$success_or_fail);
    }
}
