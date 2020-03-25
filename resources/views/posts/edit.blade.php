@extends('layouts.posts')

@section('main')
<div class="posts container">
	<h2>Edit post {{$post->id}}</h2>
	<div class="wrapper">
		<form action="{{route('posts.update', $post->id)}}" method="POST">
			@csrf
			@method('PATCH')
			<label for="title">Title</label>
			<input type="text" name="title" placeholder="Title" value="{{$post->title}}">

			<label for="subtitle">Subtitle</label>
			<input type="text" name="subtitle" placeholder="Subtitle" value="{{$post->subtitle}}">

			<label for="text">Text</label>
			<input type="text" name="text" placeholder="Text" value="{{$post->text}}">

			<label for="author">Author</label>
			<input type="text" name="author" placeholder="Author" value="{{$post->author}}">

			<label for="collaborator">Collaborator</label>
			<input type="text" name="collaborator" placeholder="Collaborator" value="{{$post->collaborator}}">

			<label for="language">Language</label>
			<input type="text" name="language" placeholder="Language" value="{{$post->language}}">

			<label for="topic">Topic</label>
			<input type="text" name="topic" placeholder="Topic" value="{{$post->topic}}">

			<label for="external_link">External link</label>
			<input type="text" name="external_link" placeholder="External link" value="{{$post->external_link}}">

			<input type="submit" value="Submit">
		</form>
	</div>
</div>
@endsection