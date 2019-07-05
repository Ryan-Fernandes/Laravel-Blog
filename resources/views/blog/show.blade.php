@extends('layouts.app')

@section('content')
	<div class="container box" align="center">

		<h1 class="title" style="display: inline;">{{$post->title}} -</h1>
		<a href="/post/tag/{{$post->category_id}}">{{$post->category->title}}</a>

		<p>By <a href="/post/name/{{$post->author_id}}">{{$post->user->name}}</a></p>

		<img src="/images/{{$post->image}}" width="40%" height="100px" alt="{{$post->image}}">

		<p style="text-align: justify; width: 50%;margin-top: 1em">{{$post->description}}</p>
		
		@if (auth()->id() == $post->author_id) <!-- //|| Auth::user()->isAdmin() -->
			<a class="button is-link" style="text-decoration: none;margin-top: 1em;" href="/post/{{$post->id}}/edit">Edit Post</a>
		@endif
		

		
	</div>
@endsection