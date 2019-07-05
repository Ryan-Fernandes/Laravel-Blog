@extends('layouts.app')

@section('content')
	
	<div class="container">
		<h1 class="title">Edit Post</h1>

		<div class="control">
			<form action="/post/{{$post->id}}" method="POST" class="box" enctype="multipart/form-data">
				@method('PATCH')
				@csrf
				<div class="field">
					<label for="title" class="label">Title:</label>
					<input type="text" name="title" class="input" value="{{$post->title}}">
				</div>
				<div class="field">
					<label for="category_id" class="label">Category:</label>
					<select name="category_id" class="input">
						@foreach ($category as $categories)
							<option value="{{$categories->id}}">{{$categories->title}}</option>
						@endforeach
					</select>
				</div>
				<div class="field">
					<label for="description" class="label">Description:</label>
					<textarea name="description" id="" cols="30" rows="10" class="textarea">{{$post->description}}</textarea>
				</div>
				<div class="field">
					<label for="image" class="label">Image:</label>
					<input type="file" name="image" class="input" style="padding-bottom: 2.2em" value="{{$post->image}}" required>
					<img src="/images/{{$post->image}}" alt="{{$post->image}}" width="100px" height="50px;">
				</div>
				<button class="button is-link">Edit Post</button>
			</form>
			<form action="/post/{{$post->id}}" method="POST">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<button class="button is-danger" style="margin-top: 1em; color: white">Delete Post</button>
			</form>	
		</div>

	</div>
@endsection