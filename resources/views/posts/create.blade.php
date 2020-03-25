@extends('layouts.posts')

@section('main')
<div class="posts container">
	<h2>Write a new post</h2>
	<div class="wrapper">
		<form action="{{route('posts.store')}}" method="POST">
			@csrf
			@method('POST')
			<label for="title">Title</label>
			<input type="text" name="title" placeholder="Title">

			<label for="subtitle">Subtitle</label>
			<input type="text" name="subtitle" placeholder="Subtitle">

			<label for="text">Text</label>
			<input type="text" name="text" placeholder="Text">

			<label for="author">Author</label>
			<input type="text" name="author" placeholder="Author">

			<label for="collaborator">Collaborator</label>
			<input type="text" name="collaborator" placeholder="Collaborator">

			<label for="language">Language</label>
			<input type="text" name="language" placeholder="Language">

			<label for="topic">Topic</label>
			<input type="text" name="topic" placeholder="Topic">

			<label for="external_link">External link</label>
			<input type="text" name="external_link" placeholder="External link">

			<input type="submit" value="Submit">
		</form>
	</div>
</div>
@endsection