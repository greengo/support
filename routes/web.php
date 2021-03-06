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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/manuals', 'HomeController@manuals');
Route::get('/guides', 'HomeController@guides');
Route::get('/faq', 'HomeController@faq');

Route::get('/internal', 'InternalController@index');

Route::get('/datahub', 'DatahubController@index');

Route::get('/datahub/retur', 'DatahubController@retur');
