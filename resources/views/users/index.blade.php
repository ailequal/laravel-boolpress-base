@extends('layouts.users')

@section('main')
<div class="users container">
	<h2>Users --> Photos</h2>
	<div class="wrapper">
		@foreach ($users as $user)
		<div class="user">
			<a href="{{route('users.show', $user->id)}}">
				<h2>{{$user->name}}</h2>
			</a>
			<h3>{{$user->email}}</h3>
			<h3>{{$user->password}}</h3>
			<div class="date">
				<span class="created_at">{{$user->created_at}}</span>
				<span class="updated_at">{{$user->updated_at}}</span>
			</div>
		</div>
		<div>
			<a href="{{route('users.edit', $user->id)}}">EDIT</a>
			<form action="{{route('users.destroy', $user->id)}}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit">DELETE</button>
			</form>
		</div>
	</div>
	@endforeach
</div>
@endsection