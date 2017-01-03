@extends('layouts.app')
@section('title', 'Courses')


@section('content')
    <form action="/api/course" method="POST" >
        <table width="50%" align="center" >
            <tr>
                <td width="20%">Course name (English): </td>
                <td><input name="name_en" /></td>
            </tr>
            <tr>
                <td width="20%">Course name (Arabic): </td>
                <td><input name="name_ar" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Save" /></td>
                <td width="20%"></td>
            </tr>
        </table>
    </form>
@endsection