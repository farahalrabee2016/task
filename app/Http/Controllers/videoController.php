<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Course;
use Validator;
class videoController extends Controller
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
        $validator = Validator::make($request->all(), [
            'name_en' => 'required',
            'name_ar'   => 'required',
            'link' => 'required',
        ]);
        if($validator->fails())
            return ['code'=>406, 'message'=>$validator->messages()];



        $name_en      = $request->input('name_en','');
        $name_ar      = strtolower($request->input('name_ar', null));
        $course_id    = $request->input('course_id');
        $details_en   = $request->input('details_en');
        $details_ar   = $request->input('details_ar');
        $link       = $request->input('link');

        $file = $request->file('image');
        $file->move('images', $file->getClientOriginalName());
        $path = 'images/'.$file->getClientOriginalName();

        $videoObj = new Video();
        $videoObj->video_name_en = $name_en;
        $videoObj->video_name_ar = $name_ar;
        $videoObj->video_details_en = $details_en;
        $videoObj->video_details_ar = $details_ar;
        $videoObj->video_link = $link;
        $videoObj->cover_link = $path;
        $videoObj->course_id = $course_id;
        $videoObj->save();

        $course = Course::find($course_id);
        $videoObj = new Video();
        $videos = $videoObj->where(['course_id'=>$course_id])->get();
        return view('course/viewCourse',['videos'=>$videos, 'course'=>$course]);

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
        return view('course/addVideo', ['course_id'=>$id]);
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
        //
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
