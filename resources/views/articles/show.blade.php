@extends('layout')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{ $article->title }}</h2>
				<br>
				<span class="byline">{{$article->excerpt}}</span> </div>
			<p><img src="../images/banner.jpg" alt="" class="image image-full" /> </p>
			<p>{!!$article->body!!}</p>

			<br>
			<div>
				@foreach ( $article->tags as $tag)
					<a href="/articles?tag= {{ $tag->name }}">{{ $tag->name }}</a>
				@endforeach
			</div>
	
		</div>
	</div>
</div>
@endsection