@extends('layouts.app')
@section('title', 'Add Video')


@section('content')
    <form action="/api/video" method="POST" enctype="multipart/form-data" >
        <table width="50%" align="center" >
            <tr>
                <td width="20%">Video name (English): </td>
                <td><input name="name_en" /></td>
            </tr>
            <tr>
                <td width="20%">Video name (Arabic): </td>
                <td><input name="name_ar" /></td>
            </tr>
            <tr>
                <td width="20%">Video Link </td>
                <td><input name="link" /></td>
            </tr>
            <tr>
                <td width="20%">Video Details (English): </td>
                <td><textarea name="details_en"></textarea></td>
            </tr>
            <tr>
                <td width="20%">Video Details (Arabic): </td>
                <td><textarea name="details_ar" ></textarea></td>
            </tr>
            <tr>
                <td width="20%">Upload Cover Image</td>
                <td><input name="image" type="file" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Save" /></td>
                <td width="20%"><input type="hidden" name="course_id" value="{{ isset($course_id) ? $course_id : '' }}" /></td>
            </tr>
        </table>
    </form>
@endsection