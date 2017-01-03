<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Video;
use Validator;
class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Course::all();
        return view('course/course',['courses'=>$data]);

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
            'id' => 'numeric',
        ]);
        if($validator->fails())
            return ['code'=>406, 'message'=>$validator->messages()];

        $name_en      = $request->input('name_en','');
        $name_ar = strtolower($request->input('name_ar', null));
        $id       = $request->input('course_id');

        $courseObj = new Course();
        if(isset($id) && trim($id)!='')
            $courseObj = Course::find($id);
        $courseObj->course_name_en = $name_en;
        $courseObj->course_name_ar = $name_ar;
        $courseObj->save();

        $data = Course::all();
        return view('course/course',['courses'=>$data]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courseObj = Course::find($id);
        $videoObj = new Video();
        $videos = $videoObj->where(['course_id'=>$id])->get();
        return view('course/viewCourse',['course'=>$courseObj, 'videos'=>$videos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('course/addCourse');
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
