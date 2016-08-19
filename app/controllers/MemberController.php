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
		$members = Members::get();

		return View::make('admin.members')
					->with('members',$members)
					->with('title','All Members list');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /member/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$depts = Dept::lists('dept_name','id');
		$bg = BloodGroup::lists('blood_group','id');
		return View::make('user.getInvolved')
					->with('depts',$depts)
					->with('bloodGroup',$bg);
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
					'id' => 'required|unique:members',
					'firstName'  => 'required',
					'phoneNo' 	=>	'required',
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

			$bg = BloodGroup::where('id',$data['bl_group'])->first();
			$dept = Dept::where('id',$data['dept'])->first();


			$member = new Members;
			$member->name = $data['firstName'].$data['lastName'];
			$member->dept = $dept->dept_name;
			$member->reg_no = $data['reg_no'];
			$member->phone = $data['phoneNo'];
			$member->role_id = 2;
			$member->role_name = 'General';
			
			if($member->save()){
				$details = new MemberDetails;
				$details->member_id = $member->id;
				$details->father = $data['father'];
				$details->mother = $data['mother'];
				$details->email = $data['email'];
				$details->address = $data['address'];
				$details->bl_group = $bg->blood_group;
				$details->save();
				
				return Redirect::route('general')->with('success','Registration Successful.');
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
		$member = Members::where('id',$id)->first();
		$member_more = MemberDetails::where('member_id',$id)->first();
		return View::make('admin.memberDetails')
						->with('title','Member Details')
						->with('member',$member)
						->with('member_more',$member_more);
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
		$member = Members::where('id',$id)->first();
		$member_more = MemberDetails::where('member_id',$id)->first();
		$bg = BloodGroup::lists('blood_group','id');
		$bg_id = BloodGroup::where('blood_group',$member_more->bl_group)->first()->id;
		$role_list = Role::lists('name','id');

		return View::make('admin.memberEdit')
						->with('title','Member Edit')
						->with('member',$member)
						->with('member_more',$member_more)
						->with('bloodGroup',$bg)
						->with('role_list',$role_list)
						->with('bg_id',$bg_id);
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
		$member = Members::findOrFail($id);
		$member_detail = MemberDetails::where('member_id',$id)->first();
		$data = Input::all();
		$role_name = Role::where('id',$data['role_id'])->first()->name;
		$bg = BloodGroup::where('id',$data['bl_group'])->first()->blood_group;

		$member->phone = $data['phoneNo'];
		$member->role_id = $data['role_id'];
		$member->role_name = $role_name;

		if($member->save()){
					$member_detail->email = $data['email'];
					$member_detail->bl_group = $bg;
					$member_detail->save();
			return Redirect::route('members.all')->with('success','Successfully edited');
		}
		else {

			return Redirect::back()->with('error','Something went wrong.Try Again.')->withInput();
		}
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