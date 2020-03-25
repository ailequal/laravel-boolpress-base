<!DOCTYPE html>
<html lang="en">

<head>
	@include('partials._head')
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/posts.css')}}">
	<title>laravel-boolpress-base</title>
</head>

<body>
	<header>
		@include('partials._header')
	</header>
	<main>
		@yield('main')
	</main>
	<footer>
		@include('partials._footer')
	</footer>
	<script src="{{asset('js/app.js')}}"></script>
	<script src="{{asset('js/posts.js')}}"></script>
</body>

</html>