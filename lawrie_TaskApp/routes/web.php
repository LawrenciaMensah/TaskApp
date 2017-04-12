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
//    return "Hello world";
    return view('welcome');
});

//Route for add new task

//Route::get('/add_task',function(){
//    return view('add');
//});
//Route::post('/add_task',function(){
//
//   return "about to add";
//});
Route::resource('/add_task','TaskController');

Auth::routes();

