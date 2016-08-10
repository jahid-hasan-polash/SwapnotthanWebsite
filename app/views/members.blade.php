@extends('layouts.userDefault')
@section('content')

	@foreach($members as $member)
	<div>
		<h1>{{$member->name}}</h1><br>
	</div>
	@endforeach
@stop