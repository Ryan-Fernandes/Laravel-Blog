@extends('layouts.app')

@section('content')

	<div class="container centre-block">
		<h1 class="title">Doe's Blog</h1>
		@foreach ($post as $posts)
			<!-- <a href="/post/{{$posts->id}}" style="font-size: larger;"><li>{{$posts->title}}</li></a> -->
			<article class="box">
				<a href="/post/{{$posts->id}}" style="text-decoration: none;">
				<img src="/images/{{$posts->image}}" alt="" width="40%" style="display: block;margin:auto; height: 400px">
				<h1 class="title">{{$posts->title}}</h1>
				-{{$posts->category->title}}
				<br>By:{{$posts->user->name}}
				</a>		
			</article>

		@endforeach
		{{ $post->links() }}
		<br>	
		
	</div> 

	<!-- <article data-v-64c83bc9="" data-v-51aab568="" class="article-teaser touch"><a data-v-64c83bc9="" href="/context-react-provide-inject-vue" class="" aria-label="Implicit State Sharing in React &amp; Vue"></a> <figure data-v-64c83bc9="" class="article-teaser-image"><img data-v-64c83bc9="" src="https://api.jonathan-harrell.com/wp-content/uploads/2018/11/implicit-state-sharing.svg" alt="Accordion with expand/collapse functionality that is made up of other components. State is shared between them using React's Context API and Vue's provide/inject feature."></figure> <div data-v-64c83bc9="" class="article-teaser-text"><h3 data-v-64c83bc9="" class="article-title"><span data-v-51aab568="" data-v-64c83bc9="" class="ais-highlight">Implicit State Sharing in React &amp; Vue</span></h3> <div data-v-64c83bc9="" class="article-excerpt"><p>Learn to use React’s Context API and provide/inject in Vue to share state between related components without resorting to a global data store.</p>
	</div> <p data-v-64c83bc9="" class="article-meta"><time data-v-64c83bc9="" datetime="1541388824" aria-label="Date" class="article-date">
	                11.05.18
	            </time> <span data-v-64c83bc9="" aria-label="Tags" class="article-tags"><span data-v-1a5ede86="" data-v-64c83bc9="" class="tag">
	    React
	</span><span data-v-1a5ede86="" data-v-64c83bc9="" class="tag">
	    Vue
	</span></span></p></div></article> -->
@endsection