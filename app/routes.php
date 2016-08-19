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
	Route::post('getInvolved', array( 'as'=>'user.getInvolved','uses' => 'MemberController@store'));

	Route::get('/news/{id}',array('as'=>'newsDetails', 'uses'=>'PageController@news'));
	Route::get('/sector/{id}',array('as'=>'sectorDetails', 'uses'=>'PageController@sectorDetails'));
	Route::get('/doner/new',array('as'=>'newDoner','uses'=>'BloodDonerController@create'));
	Route::post('/doner/store',array('as'=>'store.newDoner','uses'=>'BloodDonerController@store'));
	Route::get('/doner/list',array('as'=>'donerList','uses'=>'BloodDonerController@index'));

	Route::get('/home/mission',array('as'=>'user.home.mission','uses'=>'PageController@showMission'));
	Route::get('/home/sector/{id}',array('as'=>'user.home.sector','uses'=>'PageController@showSectorDetail'));
	Route::get('/news/{id}',array('as'=>'newsDetails','uses'=>'PageController@newsDetails'));

	
	
	
});

Route::group(array('before' => 'auth'), function()
{

	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'AuthController@doChangePassword'));

	//Member contents
	Route::get('members',array('as'=>'members.all','uses'=>'MemberController@index'));
	Route::get('/members/show/{id}',array('as'=>'member.showMore','uses'=>'MemberController@show'));
	Route::get('/members/edit/{id}',array('as'=>'member.edit','uses'=>'MemberController@edit'));
	Route::put('/members/edit/{id}',array('as'=>'member.edit','uses'=>'MemberController@update'));

	//Homepage content mission
	Route::get('/ourMission',array('as'=>'home.ourMission','uses'=>'HomepageController@ourMission'));
	Route::get('/ourMission/edit',array('as'=>'edit.ourMission','uses'=>'HomepageController@editMission'));
	Route::put('/ourMission/edit',array('as'=>'edit.ourMission','uses'=>'HomepageController@updateMission'));
	

	//Homepage content news
	Route::get('/news-add',array('as'=>'add.news','uses'=>'HomepageController@addNews'));
	Route::post('/news-add',array('as'=>'store.news','uses'=>'HomepageController@storeNews'));
	
	Route::get('/news-all',array('as'=>'all.news','uses'=>'HomepageController@allNews'));
	Route::get('/news-edit/{id}',array('as'=>'edit.news','uses'=>'HomepageController@editNews'));
	Route::put('/news-edit/{id}',array('as'=>'update.news','uses'=>'HomepageController@updateNews'));


	

});



