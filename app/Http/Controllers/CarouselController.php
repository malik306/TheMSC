<?php

namespace App\Http\Controllers;

use App\Carousel;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SweetAlert::message();
        $carousels=Carousel::all();
        $title='TheMSC-Index-Carousel-List';
        return view('admin.carousel.index',compact('carousels','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='TheMSC-Index-Carousel-Create';
        return view('admin.carousel.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*        $this->validate($request,[
            'image'=>'bail|required|image|mimes:jpeg,png,jpg,gif,svg|between:128,2048',
        ]);*/
        $image_req=$request->file('image');
        $ext_and_img_name=$image_req->getClientOriginalName();
        $image_req->move(public_path('carousel'),$ext_and_img_name);
        //dd($ext_and_img_name);
        Carousel::create([
            //$request->all(),
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$ext_and_img_name,
            'created_at'=>$request->created_at,
            'updated_at'=>$request->updated_at,
        ]);
        return redirect()->route('carousel.index')->with('success','Carousel Record will be uploaded successfully');
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
        $carousel=Carousel::where('id',$id)->find($id);
        return view('admin.carousel.edit',compact('carousel'))->with(['title'=>'TheMSC-Admin-Edit Carousel']);
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
        $carousel=Carousel::where('id',$id)->find($id);

        if ($request->hasFile('image')){

            $image_req = $request->file('image');
            //dd($image_req);
            $ext_and_img_name=$image_req->getClientOriginalName();
            //dd($ext_and_img_name);
            $image_req->move(public_path().'\carousel', $ext_and_img_name);
//            dd($ext_and_img_name);
        }
        $carousel->save([
            'title'=>$request->title,
            'description'=>$request->description,
            //dd($ext_and_img_name),
            'image'=>$ext_and_img_name,
            'created_at'=>$request->created_at,
            'updated_at'=>$request->updated_at,
        ]);
        return redirect()->route('carousel.index')->with('success','Carousel Record will be Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel=Carousel::where('id',$id)->findOrFail($id);
        $image_path = public_path('carousel\\'.$carousel->image);
        //dd($image_path);
        if(file_exists($image_path)) // check if the image indeed exists
            unlink($image_path);
        $carousel->delete();
        return redirect()->route('carousel.index')->with('carouseldeleted','Carousel Record will be Deleted successfully');
    }
}
