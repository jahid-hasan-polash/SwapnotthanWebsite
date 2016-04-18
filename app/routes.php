<?php

Route::get('/', function()
{
	return Redirect::route('home');
});

Route::get('home',['as'=>'home','uses'=>'PageController@index']);
Route::get('whatWeDo',['as'=>'whatWeDo','uses'=>'PageController@whatWeDo']);
Route::get('members',['as'=>'members','uses'=>'PageController@members']);
Route::get('executive/foo', array('as'=>'members.executive','uses'=>'PageController@executive'));
Route::get('getInvolved',['as'=>'getInvolved','uses'=>'PageController@getInvolved']);
Route::get('contact',['as'=>'contact','uses'=>'PageController@contact']);


