<!DOCTYPE html>
<html lang="en">

<head>
	@include('partials._head')
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/users.css')}}">
	<title>laravel-boolpress-base</title>
</head>

<body>
	<header>
		<div class="container">
			<nav class="nav-bar">
				<ul>
					<li><a href="{{route('users.index')}}">HOME</a></li>
					<li><a href="{{route('users.create')}}">NEW</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<main>
		@yield('main')
	</main>
	<footer>
		@include('partials._footer')
	</footer>
	<script src="{{asset('js/app.js')}}"></script>
	<script src="{{asset('js/users.js')}}"></script>
</body>

</html>