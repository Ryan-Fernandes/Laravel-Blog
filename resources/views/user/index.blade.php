@extends('layouts.app')

@section('content')
	<div class="container box">
		<h1 class="title">Users</h1>
		@foreach ($profile as $profiles)
			
				<h3><li>{{ $profiles->name }}<a href="/user/{{$profiles->id}}/edit" style="margin-left: 1em">edit</a></li></h3>
			
		@endforeach
	</div>
@endsection