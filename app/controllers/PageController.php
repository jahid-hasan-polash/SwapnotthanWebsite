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
		$newses = News::get();
		$sectors = Sector::all();
		return View::make('user.index')
				->with('missionDetail',$missionDetail)
				->with('newses',$newses)
				->with('sectors',$sectors);
	}

	public function whatWeDo()
	{
		return View::make('user.whatWeDo');
	}

	public function getInvolved()
	{
		return View::make('user.getInvolved');
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

	public function news($id){

		return News::where('id',$id)->get();
	}

	public function sectorDetails($id){

		return SectorDetail::where('sector_id',$id)->get();
	}
	/**
	 * Show the form for creating a new resource.
	 * GET /page/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /page
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /page/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /page/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /page/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /page/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}