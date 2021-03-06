@extends('layouts.posts')

@section('main')
<div class="posts container">
	<h2>Post {{$post->id}}</h2>
	<div class="wrapper">
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
			<div>
				<a href="{{route('posts.edit', $post->id)}}">EDIT</a>
				<form action="{{route('posts.destroy', $post->id)}}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit">DELETE</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection