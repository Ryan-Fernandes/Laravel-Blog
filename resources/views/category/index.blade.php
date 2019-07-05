@extends('layouts.app')

@section('content')
	<div class="container box">
		<h1 class="title">Categories</h1>
		@foreach ($category as $categories)
			
				<h3><li>{{ $categories->title }}<a href="/category/{{$categories->id}}/edit" style="margin-left: 1em">edit</a></li></h3>
			
		@endforeach
		<br>
		<!-- ADD NEW CATEGORY -->
		{{-- ADD A NEW TASK --}}
		<a href="#" class="addlink">Add Category</a>
		<div class="addDiv" style="display: none;">
			<form action="/category" method="POST" class="box">
				@csrf
				<label for="title" class="label"></label>
				<input type="text" name="title" placeholder="Add category" class="input" required>
				<button class="button is-link" style="margin-top: 1em">Add Category</button>
			</form>
		</div>
		
		<script>
			$(document).ready(function(){
			    $(".addlink").click(function(){
			        $(".addDiv").show();
			    });
			});

		</script>
	</div>
@endsection