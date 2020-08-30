<?php

namespace App\Http\Controllers\Candidate;

use App\Gender;
use App\Http\Controllers\Controller;
use App\Post;
use App\Profile;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $AuthID=Auth::id();
        $post = Post::all();
        $gender = Gender::all();
        $province = Province::all();
        return view('user.profile.create',compact('AuthID','post','gender','province'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name'   => 'required',
            'father_name'=>'required',
            'post'=>'required',
            'user_id'=>'required',
            'objective'=>'required',
            'date_of_birth'=>'required',
            'religion'=>'required',
            'domicile'=>'required',
            'nationality'=>'required',
            'address'=>'required',
            'province'=>'required',
            'phone'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gender'=>'required',
        ]);
        $request->hasFile('image');
        $image_req=$request->file('image');
        //dd($image_req);
        $ext_and_img_name=time()."_".$image_req->getClientOriginalName();
        //dd($ext_and_img_name);
        if ($request->get('post')=='admission')
        {
            $image_req->move(public_path('student'),$ext_and_img_name);
        }else{
            $image_req->move(public_path('employee'),$ext_and_img_name);
        }
        /*
        Profile::create([
            'full_name'=>$request->full_name,
            'objective'=>$request->objective,
            'image'=>$ext_and_img_name,
            'post'=>$request->post,
            'user_id'=>$request->user_id,
            'father_name'=>$request->father_name,
            'date_of_birth'=>$request->date_of_birth,
            'religion'=>$request->religion,
            'domicile'=>$request->domicile,
            'phone'=>$request->phone,
            'gender'=>$request->gender,
            'province'=>$request->province,
            'address'=>$request->address,
            'nationality'=>$request->nationality,
            'created_at'=>$request->created_at,
            'updated_at'=>$request->updated_at,
        ]);*/
        $profile=new Profile();
        $profile->full_name=$request->full_name;
        $profile->objective=$request->objective;
        $profile->image=$ext_and_img_name;
        $profile->post=$request->post;
        $profile->user_id=$request->user_id;
        $profile->father_name=$request->father_name;
        $profile->date_of_birth=$request->date_of_birth;
        $profile->religion=$request->religion;
        $profile->domicile=$request->domicile;
        $profile->phone=$request->phone;
        $profile->gender=$request->gender;
        $profile->province=$request->province;
        $profile->address=$request->address;
        $profile->nationality=$request->nationality;
        $profile->created_at=$request->created_at;
        $profile->updated_at=$request->updated_at;
        $profile->save();
        return redirect('user/index')->with('success','Profile Record will be uploaded successfully');
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
        $profile=Profile::find($id);
        $AuthID=Auth::id();
        $post = Post::all();
        $gender = Gender::all();
        $province = Province::all();
        return view('user.profile.edit',compact('AuthID','post','gender','province','profile'));
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
        $profile=Profile::where('id',$id)->find($id);
        $this->validate($request, [
            'full_name'   => 'required',
            'father_name'=>'required',
            'post'=>'required',
            'user_id'=>'required',
            'objective'=>'required',
            'date_of_birth'=>'required',
            'religion'=>'required',
            'domicile'=>'required',
            'nationality'=>'required',
            'address'=>'required',
            'province'=>'required',
            'phone'=>'required',
            'image'=>'bail|required|image|mimes:jpeg,png,jpg,gif,svg|between:1024,5120',
            'gender'=>'required',
        ]);
        if ($request->hasFile('image')){
            $image_req = $request->file('image');
            //dd($image_req);
            $ext_and_img_name=time()."_".$image_req->getClientOriginalName();
            //dd($ext_and_img_name);
            if ($request->get('post')=='admission')
            {
                //dd('student');
                $image_req->move(public_path('student'),$ext_and_img_name);
            }
            else /* ($request->get('post')=='biology' ||
                $request->get('post')=='mathematics' ||
                $request->get('post')=='chemistry' ||
                $request->get('post')=='urdu' ||
                $request->get('post')=='physics' ||
                $request->get('post')=='english' )*/{
                //dd('employee');
                $image_req->move(public_path('employee'),$ext_and_img_name);
            }
        }

        $profile->full_name=$request->full_name;
        $profile->objective=$request->objective;
        $profile->image=$ext_and_img_name;
        $profile->post=$request->post;
        $profile->user_id=$request->user_id;
        $profile->father_name=$request->father_name;
        $profile->date_of_birth=$request->date_of_birth;
        $profile->religion=$request->religion;
        $profile->domicile=$request->domicile;
        $profile->phone=$request->phone;
        $profile->gender=$request->gender;
        $profile->province=$request->province;
        $profile->address=$request->address;
        $profile->nationality=$request->nationality;
        $profile->created_at=$request->created_at;
        $profile->updated_at=$request->updated_at;
        $profile->save();
        return redirect('user/index')->with('success','Profile Record will be updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
