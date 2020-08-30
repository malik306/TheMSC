<?php

namespace App\Http\Controllers;

use App\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='TheMSC Series List';
        $series_index=Series::all();
        return view('admin.series.index',compact('title','series_index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='TheMSC Series Create';
        return view('admin.series.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$receive=$request->all();
        $this->validate($request, [
            'title'   => 'required|unique:series',
        ]);

        //Series::create($receive);
        $series= new Series();
        $series->title=strtolower($request->title);
        $series->save();
        return redirect()->route('series.index')->with('success','Series Record will be uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title='TheMSC Series Edit';
        $series=Series::find($id);
        return view('admin.series.edit',compact('title','series'));
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
        $series=Series::find($id);
        $this->validate($request, [
            'title'   => 'required|unique:series',
        ]);
        //->update($request->except(['_token','_method']))
        $series->title=strtolower($request->title);
        $series->save();
        return redirect()->route('series.index')->with('success','Series Record will be Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Series::where('id', $id)->delete();
        return redirect()->route('series.index');
    }
}
