<?php 

/*
|--------------------------------------------------------------------------------
|  Inserts Routes
|--------------------------------------------------------------------------------
=> Here Is Posts That Come From Forms As Admin Panel Or Else 
=> Routes Inserts To Database
*/

Route::post('/addtype' , 'TypeController@addtype');

Route::get('/Types' , 'TypeController@ShowTypes');

