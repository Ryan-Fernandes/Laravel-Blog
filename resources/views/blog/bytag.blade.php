@extends('layouts.app')

@section('content')

	<div class="container centre-block">

		<h1 class="title">{{$post[0]->category->name}}'s Post's</h1>

		@foreach ($post as $posts)
			<article class="box">
				<a href="/post/{{$posts->id}}" style="text-decoration: none;">
				<img src="/images/{{$posts->image}}" alt="" width="40%" style="display: block;margin:auto; height: 400px">
				<h1 class="title">{{$posts->title}}</h1>
				-{{$posts->category->title}}
				<br>By:{{$posts->user->name}}
				</a>		
			</article>

		@endforeach
		{{$post->links()}}
		<br>	
		
	</div> 
@endsection