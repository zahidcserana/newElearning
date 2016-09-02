<?php

Route::get('/home',['as'=>'home', 'uses' => 'ElearningController@Home']);

Route::get('/message/{msg}',['as'=>'message', 'uses'=>'ElearningController@Message']);

Route::get('/',['as'=>'user_login', 'uses' => 'ElearningController@LoginForm']);
Route::post('/login',['as'=>'login', 'uses' => 'ElearningController@Login']);


Route::get('/registration',['as'=>'registration', 'uses' => 'ElearningController@RegistrationForm']);

Route::post('/registration',['as'=>'registration', 'uses' => 'ElearningController@Registration']);

Route::get('/confirm/{token}',['as'=>'confirm', 'uses' => 'ElearningController@Confirmation']);

// Course View
Route::get('/course_view',['as'=>'course_view', 'uses' => 'CourseController@CourseView']);

Route::get('/new_course',['as'=>'new_course', 'uses' => 'CourseController@NewCourse']);

Route::post('/new_course',['as'=>'new_course', 'uses' => 'CourseController@AddCourse']);

Route::get('/course_edit/{id}',['as'=>'course_edit', 'uses' => 'CourseController@EditCourse']);

Route::post('/edit_course',['as'=>'edit_course', 'uses' => 'CourseController@CourseEdit']);

// Lecture View

Route::get('/lecture_view',['as'=>'lecture_view', 'uses' => 'LectureController@LectureView']);

Route::get('/new_lecture',['as'=>'new_lecture', 'uses' => 'LectureController@NewLecture']);

Route::post('/new_lecture',['as'=>'new_lecture', 'uses' => 'LectureController@AddLecture']);

Route::get('/lecture_edit/{id}',['as'=>'lecture_edit', 'uses' => 'LectureController@EditLecture']);

Route::post('/edit_lecture',['as'=>'edit_lecture', 'uses' => 'LectureController@LectureEdit']);