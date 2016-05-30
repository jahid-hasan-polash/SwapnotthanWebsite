<?php

Route::get('/', array('as'=> 'index','uses'=>'PageController@index'));

Route::get('/admin',function(){
	return Redirect::route('dashboard');
});

Route::group(['before' => 'guest'], function(){
	Route::controller('password', 'RemindersController');
	Route::get('login', ['as'=>'login','uses' => 'AuthController@login']);
	Route::post('login', array('uses' => 'AuthController@doLogin'));
	//pages link
	Route::get('/user/whatWeDo', array('as'=>'whatWeDo', 'uses' => 'PageController@whatWeDo'));
	Route::get('/user/general', array('as'=>'general', 'uses' => 'PageController@members'));
	Route::get('/user/executives', array('as'=>'executive', 'uses' => 'PageController@executive'));
	Route::get('/user/contact', array('as'=>'contact', 'uses' => 'PageController@contact'));
	Route::get('/user/getInvolved', array('as'=>'getInvolved', 'uses' => 'MemberController@create'));
	Route::post('getInvolved', array('uses' => 'MemberController@store'));


});

Route::group(array('before' => 'auth'), function()
{

	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'AuthController@doChangePassword'));
	

});