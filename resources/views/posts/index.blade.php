@extends('layouts.posts')

@section('main')
<div class="posts container">
	<h2>Posts</h2>
	<div class="wrapper">
		@foreach ($posts as $post)
		<div class="post">
			<a href="{{route('posts.show', $post->id)}}">
				<h2>{{$post->title}}</h2>
			</a>
			<h3>{{$post->subtitle}}</h3>
			<p>{{$post->text}}</p>
			<div class="box">
				<div class="authors">
					<span class="author">{{$post->author}}</span>
					<span class="collaborator">{{$post->collaborator}}</span>
				</div>
				<div class="info">
					<span class="language">{{$post->language}}</span>
					<span class="topic">{{$post->topic}}</span>
				</div>
				<div class="link">
					<a class="external_link" href="#">{{$post->external_link}}</a>
				</div>
				<div class="date">
					<span class="created_at">{{$post->created_at}}</span>
					<span class="updated_at">{{$post->updated_at}}</span>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection