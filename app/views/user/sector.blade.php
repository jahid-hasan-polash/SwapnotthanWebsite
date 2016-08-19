@extends('layouts.userDefault')
@section('content')
	<div id="content" class="container">
			<div class="row margin-vert-30">

				<div class="col-md-12">
					@foreach($details as $detail)
					<h2>{{ $detail->title }}</h2>
					<div class="row">
						<div class="col-md-3">
							{{ HTML::image('asset/img/theteam/image1.jpg', 'about-me', array('class' => 'margin-top-10')) }}
						</div>
						<div class="col-md-9 margin-bottom-10">
							
							<div class="clearfix"></div>
							<p>{{ $detail->description }}</p>
						</div>
					</div>
					<hr>
					@endforeach
					<div class="container">
						<h2 class="text-center margin-top-10" style="color: #3366ff">ALONE WE CAN DO SO LITTLE; BUT TOGETHER WE CAN DO SO MUCH</h2>
						<p class="text-center margin-bottom-30">Join us in the way of helping and building a better future</p>
					</div>
@stop