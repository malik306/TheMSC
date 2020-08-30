<?php

namespace App\Http\Controllers\Candidate;

use App\Experience;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
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
        return view('user.experience.create',compact('ProfileID'));
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
        Experience::create($receive);
        return redirect('user/index')->with('success','Experience Record will be uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ProfileID=User::find(Auth::id())->profile;
        $experience=Experience::find($id);
        return view('user.experience.edit',compact('ProfileID','experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Experience::where('id',$id)->update($request->except(['_token','_method']));
        return redirect('user/index')->with('success','Experience Record will be updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Experience::where('id', $id)->delete();
        return redirect('user/index');
    }
}
