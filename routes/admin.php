<?php

/*
|--------------------------------------------------------------------------------
|  Admin Routes
|--------------------------------------------------------------------------------
*/


Route::get('/admina' , function () {
 	return "This is the admin panel";
}) ->name('admina');

Route::namespace('Users')->group(function(){
		Route::get('user' , 'appController@AdminName');
});


Route::group(['prefix' => 'welcom'],function(){
	Route::get('/' , function(){
		return 'Group Worked';
	});
});