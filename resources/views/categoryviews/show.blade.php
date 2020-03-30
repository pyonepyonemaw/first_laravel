@extends("layouts.app")

@section("content")
<div class="container">
	<h2>Name - {{ $category->name }}</h2>
	<li>Description - {{ $category->description }}</li>
	<a href="/category/{{$category->id}}/edit"><button class="btn btn-secondary">Edit</button></a>

	<form method="POST" action="/category/{{ $category->id }}">
		{{ method_field('DELETE') }}
		{{ csrf_field() }}

	  <button type="submit" class="btn btn-primary">Delete</button>
</form>
</div>
@endsection

