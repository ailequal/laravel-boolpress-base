@extends('layouts.avatars')

@section('main')
<div class="avatars container">
	<h2>Avatar --> User: {{$avatar->id}}</h2>
	<div class="wrapper">
		<div class="avatar">
			<a href="{{route('avatars.show', $avatar->id)}}">
				<img src="{{$avatar->url}}" alt="avatar">
			</a>
			<h3>{{$avatar->email}}</h3>
			<div>
				<h4>{{$avatar->user->name}}</h4>
				<h4>{{$avatar->user->email}}</h4>
			</div>
			<div class="date">
				<span class="created_at">{{$avatar->created_at}}</span>
				<span class="updated_at">{{$avatar->updated_at}}</span>
			</div>
			<div>
				<a href="{{route('avatars.edit', $avatar->id)}}">EDIT</a>
				<form action="{{route('avatars.destroy', $avatar->id)}}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit">DELETE</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection