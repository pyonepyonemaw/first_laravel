@extends("layouts.app")

@section("content")
<div class="container">
	<h2>{{ $receipe->name }}</h2>
	<li>Ingredients - {{ $receipe->ingredient }}</li>
	<li>Category - {{ $receipe->categories->name }}</li>

	<a href="/receipe/{{$receipe->id}}/edit"><button class="btn btn-secondary">Edit</button></a>

	<form method="POST" action="/receipe/{{ $receipe->id }}">
		{{ method_field('DELETE') }}
		{{ csrf_field() }}

	  <button type="submit" class="btn btn-primary">Delete</button>
</form>
</div>
@endsection

