@extends('layout.main')

@section('body')

	<div class="col-lg-12 col-lg-offset-2">
		<br>
		<center><h2>Tweet Clone</h2>
		<a href="tweet/create" class="btn btn-primary">Create New Tweet</a></center>
		<br>
		@include('partials.tweet')
	</div>
@endsection