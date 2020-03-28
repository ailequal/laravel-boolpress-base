@extends('layouts.photos')

@section('main')
<div class="photos container">
	<h2>Photos --> User</h2>
	<div class="wrapper">
		@foreach ($photos as $photo)
		<div class="photo">
			<a href="{{route('photos.show', $photo->id)}}">
				<h2>{{$photo->file_name}}</h2>
				<img src="{{$photo->url}}" alt="url">
			</a>
			<h3>{{$photo->url}}</h3>
			<div>
				<h4>{{$photo->user->name}}</h4>
				<h4>{{$photo->user->email}}</h4>
			</div>
			<div class="date">
				<span class="created_at">{{$photo->created_at}}</span>
				<span class="updated_at">{{$photo->updated_at}}</span>
			</div>
			<div>
				<a href="{{route('photos.edit', $photo->id)}}">EDIT</a>
				<form action="{{route('photos.destroy', $photo->id)}}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit">DELETE</button>
				</form>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection