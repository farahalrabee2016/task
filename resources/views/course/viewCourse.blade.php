@extends('layouts.app')
@section('title', 'Courses')


@section('content')
    <form action="/api/course/" method="POST" >
        <table width="50%" align="center" >
            <tr>
                <td width="20%">Course name (English): <input name="name_en" value="{{$course->course_name_en}}" /></td>
                <td width="20%">Course name (Arabic): <input name="name_ar" value="{{$course->course_name_ar}}" /></td>
                <td width="20%"><input type="submit" value="Edit" /></td>
                <td width="20%"><input type="hidden" name="course_id" value="{{ isset($course->id) ? $course->id : '' }}" /></td>
            </tr>
        </table>
    </form>
    <table width="50%" align="center">
        <tbody>
        <tr>
            <th colspan="2" >Videos</th>
        </tr>
        <tr align="center">
            <td colspan="2"><div class="links" ><a href="{{ URL::to('api/video/'.$course->id.'/edit') }}">Add Video</a></div></td>
        </tr>
        <tr><td colspan="2"></td></tr>
        @foreach ($videos as $key=>$video)
            <tr >
                <td width="20%"><image img src="/{{$video->cover_link}}" alt="Logo" width="196" height="110" ></image></td>
                <td>
                    <div><a href="{{$video->video_link}}">{{$video->video_name_en}}</a></div>
                    <div><a href="{{$video->video_link}}">{{$video->video_link}}</a></div>
                    <div>{{$video->video_details_en}}</div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection