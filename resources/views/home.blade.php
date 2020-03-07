@extends("layout")

<!-- @section("title")
Home Page
@endsection -->

@section("content")
<h2>Home Page</h2>
@foreach($data as $value)
<li>Name - {{ $value->name }}</li>
<li>Ingredient - {{ $value->ingredient }}</li>
<li>Category - {{ $value->category }}</li>
<hr>

@endforeach
@endsection

