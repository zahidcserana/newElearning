<?php

Route::get('/home',['as'=>'home', 'uses' => 'ElearningController@Home']);

Route::get('/message/{msg}',['as'=>'message', 'uses'=>'ElearningController@Message']);

Route::get('/',['as'=>'user_login', 'uses' => 'ElearningController@LoginForm']);
Route::post('/login',['as'=>'login', 'uses' => 'ElearningController@Login']);


Route::get('/registration',['as'=>'registration', 'uses' => 'ElearningController@RegistrationForm']);

Route::post('/registration',['as'=>'registration', 'uses' => 'ElearningController@Registration']);

Route::get('/confirm/{token}',['as'=>'confirm', 'uses' => 'ElearningController@Confirmation']);
