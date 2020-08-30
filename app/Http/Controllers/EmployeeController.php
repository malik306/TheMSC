<?php

namespace App\Http\Controllers;

use App\Gender;
use App\Post;
use App\Province;
use App\Role;
use App\Series;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::where('user_role','employee')->orderBy('cnic','asc')->get();
        //$users= DB::table('users')->where('user_role','employee')->orderBy('cnic','asc')->get();
        $title='TheMSC Employee List';
        return view('admin.employee.index',compact('users','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users=User::find($id);
        $candidate=User::find($id);
        $qualification=User::find($id)->qualification;
        $experience=User::find($id)->experience;
        $title='TheMSC Employee Experience and Qualification';
        return  view('admin.employee.show',compact('users','title','candidate','qualification','experience'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        /*$post=Post::all();
        $gender=Gender::all();
        $role=Role::all();
        $province=Province::all();*/
        $series=DB::table('series')->where('title','like','the-msc%')->get();
        $title='TheMSC Employee Edit';
        return view('admin.employee.edit',compact('user','title','series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::where('id',$id)->find($id);
        //dd($user);2
        $number= User::where('series_id',$request->series_id)->max('number')+1;
        //dd($number);1
        $strpad=str_pad($number,3,0,STR_PAD_LEFT);
        //dd($strpad);
        $user->number=$strpad;
        $user->series_id=$request->series_id;

        if(isset($user->series))
        {
            $user->user_name=$user->series->title."-".$strpad;
        }
        /*      $user->objective=$request->objective;
                $user->full_name=$request->full_name;
                $user->father_name=$request->father_name;
                $user->domicile=$request->domicile;
                $user->gender=$request->gender;
                $user->phone=$request->phone;
                $user->address=$request->address;
                $user->province=$request->province;
                $user->nationality=$request->nationality;
                $user->religion=$request->religion;
                $user->date_of_birth=$request->date_of_birth;
                $user->user_role=$request->user_role;
                $user->post=$request->post;*/

        $user->email=$request->email;
        $user->cnic=$request->cnic;
        $user->status=$request->status;
        $user->created_at=$request->created_at;
        $user->updated_at=$request->updated_at;
        $user->save();
        return redirect()->route('employee.index')->with('success','Student Record will be Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::where('id',$id)->findOrFail($id);
        $image_path = public_path('Employee\\'.$user->profile->image);
        //dd($image_path);
        if(file_exists($image_path)) // check if the image indeed exists
            unlink($image_path);
        $user->delete();
        return redirect()->route('employee.index');
    }
}
