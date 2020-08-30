<?php

namespace App\Http\Controllers;

use App\TheClass;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Class=TheClass::all();
        $title='TheMSC-Index-Class-List';
        return view('admin.class.index',compact('Class','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='TheMSC-Admin-Create Class';
        return view('admin.class.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->all();
        $this->validate($request, [
            'name'   => 'required',
            'division'=>'required',
        ]);
        $class =new TheClass();
        $class->name=strtolower($request->name);
        $class->division=strtolower($request->division);
        $class->save();
        //TheClass::create($receive);
        return redirect()->route('class.index')->with('success','Class Record will be uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TheClass  $theClass
     * @return \Illuminate\Http\Response
     */
    public function show(TheClass $theClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TheClass  $theClass
     * @return \Illuminate\Http\Response
     */
    public function edit(TheClass $theClass,$id)
    {
        $Class=TheClass::find($id);
        return view('admin.class.edit',compact('Class'))->with(['title'=>'TheMSC-Admin-Edit Class']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TheClass  $theClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $class=TheClass::find($id);
        $class->name=strtolower($request->name);
        $class->division=strtolower($request->division);
        $class->save();
        //TheClass::where('id',$id)->update($request->except(['_token','_method']));
        return redirect()->route('class.index')->with('success','Class Record will be Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TheClass  $theClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(TheClass $theClass,$id)
    {
        TheClass::where('id', $id)->delete();
        //dd($theClass);
        return redirect()->route('class.index')->with('theclassdeleted','Class Record will be Deleted successfully');
    }
}
