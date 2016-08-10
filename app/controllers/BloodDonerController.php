<?php

class BloodDonerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /blooddoner
	 *
	 * @return Response
	 */
	public function index()
	{
		$doners = Doner::get();
		return View::make('user.donerList')
					->with('doners',$doners)
					->with('title','Doner List');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /blooddoner/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$gender = Gender::lists('gender','id');
		$bg = BloodGroup::lists('blood_group','id');

		return View::make('user.bloodDonerEntry')
						->with('gender',$gender)
						->with('bloodGroup',$bg);

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /blooddoner
	 *
	 * @return Response
	 */
	public function store()
	{

		$rules = [
					'firstName'      => 'required',
					'lastName'      => 'required',
					'address' 	=>	'required',
					'phoneNo'       => 'required'
		];

		$data = Input::all();

		$validator = Validator::make($data,$rules);
		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		} 

		$gender = Gender::findOrFail($data['gender'])->gender;
		$bg = BloodGroup::findOrFail($data['bg'])->blood_group;

			$doner = new Doner;
			$doner->name = $data['firstName'].' '.$data['lastName'];
			$doner->address = $data['address'];
			$doner->gender = $gender;
			$doner->blood_group = $bg;
			$doner->phone = $data['phoneNo'];
			$doner->last_donation = $data['date'];
			$doner->security = $data['security'];
			$doner->optional = $data['optional'];

			if($doner->save()){
				return Redirect::route('donerList')->with('success','Doner Registration successfull.');
			}else {
				return Redirect::back()->with('error','Something went wrong.Try Again.');
			}
	}

	/**
	 * Display the specified resource.
	 * GET /blooddoner/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /blooddoner/{id}/edit
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
	 * PUT /blooddoner/{id}
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
	 * DELETE /blooddoner/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}