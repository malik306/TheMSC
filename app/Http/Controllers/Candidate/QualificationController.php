<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Profile;
use App\Qualification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ProfileID=User::find(Auth::id())->profile;
        return  view('user.qualification.create',compact('ProfileID'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receive=$request->all();
//        $this->validate($request, [
//            'course_code'   => 'required',
//            'course_name'=>'required',
//        ]);
        Qualification::create($receive);
        return redirect('user/index')->with('success','Qualification Record will be uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function show(Qualification $qualification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ProfileID=User::find(Auth::id())->profile;
        $qualification=Qualification::find($id);
        return view('user.qualification.edit',compact('ProfileID','qualification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        Qualification::where('id',$id)->update($request->except(['_token','_method']));
        return redirect('user/index')->with('success','Qualification Record will be Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Qualification::where('id', $id)->delete();
        return redirect('user/index');
    }
}
