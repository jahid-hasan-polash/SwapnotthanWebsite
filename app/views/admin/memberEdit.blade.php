@extends('layouts.userDefault')
@section('content')
    <div class="container">
        <div class="row margin-vert-30">
            @include('includes.alert')

                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                    {{ Form::model($member , array('route' => ['member.edit' , $member->id], 'method'=>'put', 'class' => 'signup-page')) }}

                    	<div class="signup-header">
							<h2 align='center'>Edit member Detail</h2>
						</div>
						<hr>

						<!-- Phone No-->
						<label>Phone No</label>
						{{ Form::text('phoneNo', $member->phone , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Phone No *')) }}

						<!-- email -->
						<label>Email</label>
						{{ Form::text('email', $member_more->email , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Email')) }}
				
						<!-- Blood Group -->
						<label>Blood Group</label>
						{{ Form::select('bl_group', $bloodGroup , $bg_id, array('class' => 'form-control margin-bottom-20')) }}

						<!-- Role -->
						<label>Role</label>
						{{ Form::select('role_id', $role_list , $member->role_id, array('class' => 'form-control margin-bottom-20')) }}

						<div class="text-center">
							{{ Form::submit('Done', array('class' => 'btn btn-primary')) }}
						</div>

					<!-- Form close -->
                    {{ Form::close() }}
                </div>
        </div>
    </div>
@stop
