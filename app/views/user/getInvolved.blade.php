@extends('layouts.userDefault')
@section('content')
    <div class="container">
        <div class="row margin-vert-30">
            @include('includes.alert')

                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                    {{ Form::open(array('route' => 'user.getInvolved','method'=>'post','class' => 'signup-page')) }}

                    	<div class="signup-header">
							<h2 align='center'>Register as a new member</h2>
						</div>
						<hr>
						<!--First Name and last Name -->
						<div class="row">
							<div class="col-sm-6">
								{{ Form::text('firstName', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'First Name *')) }}

							</div>
							<div class="col-sm-6">
								{{ Form::text('lastName', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Last Name *')) }}
							</div>
						</div>

						<!-- Department -->
						<label>Department</label>
						{{ Form::select('dept', $depts, null, array('class' => 'form-control margin-bottom-20', 'required')) }}

						<!-- Registration no -->
						{{ Form::text('reg_no', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Registration No *')) }}

						<!-- Phone No-->
						{{ Form::text('phoneNo', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Phone No *')) }}

						<!-- email -->
						{{ Form::text('email', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Email')) }}

						<!-- Fathers name -->
						{{ Form::text('father', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Fathers name')) }}

						<!-- Mothers name -->
						{{ Form::text('mother', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Mothers name')) }}

						<!-- Address -->
						{{ Form::text('address', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Address')) }}
						
						<!-- Blood Group -->
						{{ Form::select('bl_group', $bloodGroup , null, array('class' => 'form-control margin-bottom-20')) }}

						<div class="text-center">
							{{ Form::submit('Register', array('class' => 'btn btn-primary')) }}
						</div>

					<!-- Form close -->
                    {{ Form::close() }}
                </div>
        </div>
    </div>
@stop

@section('script')

 {{ HTML::style('assets/bootstrap-datepicker/css/datepicker.css') }}
 
 {{ HTML::script('assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}


   <script type="text/javascript">
       $(document).ready(function() {
           $("#date").datepicker({
               format: 'yyyy-mm-dd'
           });
           $( "#date" ).datepicker( "setDate", new Date() );

       
       });



   </script>

@stop