@extends('layouts.app')
@section('title', 'Courses')


@section('content')
    <table width="50%" align="center">
        <tbody>
            <tr>
                <th>Course Name</th>
            </tr>
            @foreach ($courses as $key=>$course)
                <tr>
                    <td @if($key%2==0) style="background-color: lightgray;" @endif ><a href="{{ url('/course')}}/{{$course->id}}">{{$course->course_name_en}}</a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection