<?php

class HomepageController extends \BaseController {

	public function ourMission()
	{
		$mission = OurMission::first();
		return View::make('admin.ourMission')
						->with('title','Our Mission')
						->with('mission',$mission);
	}


	public function editMission()
	{
		$mission = OurMission::first();
		return View::make('admin.editMission')
						->with('title','Our Mission')
						->with('mission',$mission);
	}


	public function updateMission()
	{
		$mission = OurMission::first();
		$data = Input::all();

		$mission->preview = $data['preview'];
		$mission->description = $data['description'];

		if($mission->save()){
			return Redirect::route('dashboard')->with('success','Update Successful.');
			}
			else {
				return Redirect::back()->with('error','Something went wrong.Try Again.')->withInput();
			}
	}

	public function addNews(){

		return View::make('admin.addNews')
					->with('title','Add another News');

	}

	public function storeNews(){

		$rules = [

					'title'  => 'required',
					'description' 	=>	'required'
		];

		$data = Input::all();

		$validator = Validator::make($data,$rules);
		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}
		
		$news = new News;
		$news->title = $data['title'];
		$news->description = $data['description'];

		if($news->save()){
				return Redirect::route('dashboard')->with('success','News added.');
			}else {
				return Redirect::back()->with('error','Something went wrong.Try Again.');
			}


	}

	//News Contents
	public function editNews($id){
		
		$news = News::find($id);
		return View::make('admin.editNews')
					->with('news',$news)
					->with('title','Edit News Contents');
	}



	public function updateNews($id){

		$rules = [

					'title'  => 'required',
					'description' 	=>	'required'
		];

		$data = Input::all();

		$validator = Validator::make($data,$rules);
		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}
		
		$news = News::find($id);
		$news->title = $data['title'];
		$news->description = $data['description'];

		if($news->save()){
				return Redirect::route('dashboard')->with('success','News Updated.');
			}else {
				return Redirect::back()->with('error','Something went wrong.Try Again.')->withInput();
			}
		
	}

	public function allNews(){

		$newses = News::orderBy('created_at')->get();
		return View::make('admin.allNews')
					->with('newses',$newses)
					->with('title','All News');
		
	}


	

}