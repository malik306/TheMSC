<?php

namespace App\Http\Controllers;
use App\User;
use App\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $title = 'Employee attendance Details';
        return  view('admin.attendance.index',compact('title'));
    }
    public function get_dynamic(Request $request)
    {


        list($year,$month,$day)=explode('-',$request['picker']);

        //$attendance=attendance::whereDate('date',$request->picker)->get();
        //dd($attendance);
        $title = 'Employee attendance Details';
        return view('admin.attendance.index',compact('year','month','day','title'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=User::where('user_role','employee')->get();
        $title='Employee attendance Create';
        return view('admin.attendance.create',compact('title','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->all();
//        $this->validate($request, [
//            'inquiry' => 'required',
//        ]);
//        dd($attendance);
         define('date',$request->date);
         define('topic',$request->topic);
        foreach ($request->present as $key => $item){
                $data = new  Attendance();
                $data->profile_id = $key;
                $data->date = date;
                $data->topic = topic;
                $data->comment=$request->comment;
                $data->present = $request->present[$key];
                $data->save();
        }
        return redirect()->route('attendance.index')->with('success','attendance will be uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        dd($request);
    }

    public function delete(Request  $request)
    {
        Attendance::whereIn('id',$request['select'])->delete();
        return redirect()->route('attendance.index');
    }
}
