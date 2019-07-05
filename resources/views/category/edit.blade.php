@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="title">Edit Category</h1>
		<div class="control">
			<form action="/category/{{$category->id}}" method="POST" class="box">
				{{csrf_field()}}
				{{method_field('PATCH')}}
				<label for="title" class="label"></label>
				<input type="text" name="title" placeholder="Add category" class="input" required value="{{$category->title}}">
				<br>
				<button class="button is-link" style="margin-top: 1em">Edit Category</button>
			</form>
			<form action="/category/{{$category->id}}" method="POST">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<button class="button is-danger" style="margin-top: 1em; color: white">Delete Category</button>
			</form>	
		</div>
	</div>
@endsection