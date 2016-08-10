@extends('layouts.userDefault')
@section('content')
    <div class="container">
        <div class="row margin-vert-30">
            @include('includes.alert')

                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                    {{ Form::open(array('route' => 'store.newDoner','method'=>'post','class' => 'signup-page')) }}

                    	<div class="signup-header">
							<h2 align='center'>Register as a new Blood Donor</h2>
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

						<!-- Address -->
						{{ Form::text('address', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Current Address*')) }}

						<div class="row">
							<div class="col-sm-6">
								<!-- Gender -->
								{{ Form::select('gender', $gender, null, array('class' => 'form-control margin-bottom-20', 'required')) }}
							</div>
							<div class="col-sm-6">
								<!-- Blood Group -->
								{{ Form::select('bg', $bloodGroup, null, array('class' => 'form-control margin-bottom-20', 'required')) }}
							</div>
						</div>

						<!-- Phone No-->
						{{ Form::text('phoneNo', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Phone No *')) }}

						<!-- Last donation date -->
						{{ Form::label('last_donation', 'Last blood donation date', array('class' => 'control-label')) }}
						<input type="date" name="date" class="form-control margin-bottom-20" max="">
						 
						 <hr>
						<!-- Phone No hiding-->
						{{ Form::label('security', 'If you want to Restrict your phone number from being public', array('class' => 'control-label')) }}
						{{ Form::text('security', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'type "h" to hide or keep it blank')) }}

						<!-- optional field for comments -->
						{{ Form::text('optional', '' , array('class' => 'form-control margin-bottom-20', 'placeholder' => 'Optional')) }}
						
						<div class="text-center">
							{{ Form::submit('Register', array('class' => 'btn btn-primary')) }}
						</div>

					<!-- Form close -->
                    {{ Form::close() }}
                </div>
        </div>
    </div>
@stop

@section('style')

{{ HTML::style('assets/bootstrap-datepicker/css/datepicker.css') }}
 
@stop

@section('script')

 {{ HTML::script('assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}


   <script type="text/javascript">
       $(function() {
  // Enable Pickadate on an input field and 
  // specifying date format for hidden input field
  $('#date').pickadate({
    formatSubmit : 'yyyy/mm/dd'
  });
});
  });



   </script>

@stop
