<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'courseController@index');
Route::get('/addCourse', 'courseController@edit');
Route::get('/saveCourse', 'courseController@store');
Route::resource('course', 'courseController', []);

/*
Route::get('/', function () {
    Route::resource('course', 'courseController', []);
    return view('course/course');
});

Route::group(['prefix' => 'courses'], function() {
    Route::resource('course', 'courseController', []);
    Route::resource('video', 'videoController', []);
});