@extends('layouts.app')

@section('content')
	
	<div class="container">
		<h1 class="title">Create Post</h1>

		<div class="control">
			<form action="/post" method="POST" class="box" enctype="multipart/form-data">
				@csrf
				<div class="field">
					<label for="title" class="label">Title:</label>
					<input type="text" name="title" class="input">
				</div>
				<div class="field">
					<label for="category_id" class="label">Category:</label>
					<select name="category_id" id="" class="input">
						@foreach ($category as $categories)
							<option value="{{$categories->id}}">{{$categories->title}}</option>
						@endforeach
					</select>
				</div>
				<div class="field">
					<label for="description" class="label">Description:</label>
					<textarea name="description" id="" cols="30" rows="10" class="textarea"></textarea>
				</div>
				<div class="field">
					<label for="image" class="label">Image:</label>
					<input type="file" name="image" class="input" style="padding-bottom: 2.2em">
				</div>
				<button class="button is-link">Add Post</button>
				@extends('errors')
			</form>
		</div>

	</div>
@endsection