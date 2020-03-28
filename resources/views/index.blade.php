@extends('layouts.home')

@section('main')
<div class="container">
	<h2><a href="{{route('avatars.index')}}">Avatars</a></h2>
	<h2><a href="{{route('photos.index')}}">Photos</a></h2>
	<h2><a href="{{route('posts.index')}}">Posts</a></h2>
	<h2><a href="{{route('users.index')}}">Users</a></h2>
</div>
@endsection