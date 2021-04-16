<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/test1' , function() {
    return "first laravel prog";
}) -> name('t1');

// route parameters

Route::get('/test2/{id}' , function ($id) {
    return $id ;
}) -> name('t2');




Route::get('/fc' , 'Fcontroller@fcweb');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
