<?php

/*
|--------------------------------------------------------------------------------
|  Admin Routes
|--------------------------------------------------------------------------------
*/

Route::get('/admins' , function () {
 	return "This is the admin panel";
}) ->name('admins');


Route::namespace('Users')->group(function(){
		Route::get('user' , 'appController@AdminName')->middleware('auth');
});



Route::group(['prefix' => 'welcom'],function(){
	Route::get('/' , function(){
		return 'Group Worked';
	});
});

