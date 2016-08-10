<?php

class MemberController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /member
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /member/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.getInvolved');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /member
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = [
					'id'	=> 'required|unique:members',
					'name'      => 'required',
					'phone' 	=>	'required',
					'reg_no'	=>	'required',
					'mother'	=>	'required',
					'father'	=>	'required',
					'bl_group'	=>	'required'
		];

		$data = Input::all();

		$validator = Validator::make($data,$rules);
		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		} 



			$member = new Members;
			$member->id = $data['id'];
			$member->name = $data['name'];
			$member->reg = $data['reg_no'];
			$member->phone = $data['phone'];
			
			if($member->save()){
				$details = new MemberDetails;
				$details->father = $data['father'];
				$details->mother = $data['mother'];
				$details->email = $data['email'];
				$details->address = $data['address'];
				$details->save();
				
				return Redirect::route('login')->with('success','Registration Successful. You can log in now.');
			}else {
				return Redirect::back()->with('error','Something went wrong.Try Again.');
			}
	}

	/**
	 * Display the specified resource.
	 * GET /member/{id}
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
	 * GET /member/{id}/edit
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
	 * PUT /member/{id}
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
	 * DELETE /member/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}