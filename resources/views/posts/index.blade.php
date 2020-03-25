@extends('layouts.posts')

@section('main')
<div class="posts container">
	<h2>Posts</h2>
	<div class="wrapper">
		<div class="post">
			<h2>title</h2>
			<h3>subtitle</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum provident quam itaque corporis quisquam
				adipisci accusamus explicabo, asperiores voluptatibus, sequi inventore nobis esse ipsa nostrum sit odit,
				molestiae a sapiente!</p>
			<div class="box">
				<div class="authors">
					<span class="author">author</span>
					<span class="collaborator">collaborator</span>
				</div>
				<div class="info">
					<span class="language">language</span>
					<span class="topic">topic</span>
				</div>
				<div class="link">
					<a class="external_link" href="#">external_link</a>
				</div>
				<div class="date">
					<span class="created_at">created_at</span>
					<span class="updated_at">updated_at</span>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection