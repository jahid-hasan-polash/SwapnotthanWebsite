<?php

class PageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /page
	 *
	 * @return Response
	 */
	public function index()
	{
		$missionDetail = OurMission::first();
		$newses = News::orderBy('created_at')->get();
		$sectors = Sector::all();
		return View::make('user.index')
				->with('missionDetail',$missionDetail)
				->with('newses',$newses)
				->with('sectors',$sectors);
	}

	public function whatWeDo()
	{
		$details = SectorDetail::all();
		return View::make('user.whatWeDo')
					->with('details',$details);
		;
	}

	public function contact()
	{
		return View::make('user.contact');
	}

	public function members()
	{
		$members = Members::where('role_id',2)->get();
		return View::make('user.members')
				->with('members',$members);
	}

	public function executive()
	{
		$members = Members::where('role_id','>=',3)->get();
		return View::make('user.members')
				->with('members',$members);
	}

	public function showMission(){

		$mission = OurMission::first()->description;
		return View::make('user.showMission')
						->with('mission',$mission);
	}

	public function showSectorDetail($id){

		$details = SectorDetail::where('sector_id',$id)->get();
		return View::make('user.sector')
					->with('details',$details);
	}

	public function newsDetails($id){

		$news = News::where('id',$id)->first();
		$newsAll = DB::table('news')->orderBy('created_at')->get();
		return View::make('user.news')
				->with('news',$news)
				->with('newsAll',$newsAll);
		}

}