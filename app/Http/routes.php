<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/hospital', 'HospitalController@index');

Route::get('/hospital/{userData}', 'HospitalController@edit');

Route::patch('/updateUser/{userData}', 'HospitalController@update');