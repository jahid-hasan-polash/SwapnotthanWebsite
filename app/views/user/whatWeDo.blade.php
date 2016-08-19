@extends('layouts.userDefault')
@section('content')
	<div id="content" class="container">
			<div class="row margin-vert-30">
				<!-- Main Column -->
				@foreach($details as $detail)
				<div class="col-md-12">
					<h2>{{ $detail->title }}</h2>
					<p>{{ $detail->description }}</p>
					
				</div>
				<hr>
				@endforeach
				<!-- End Main Column -->
			</div>
		</div>
@stop