@extends('layouts.app')

@section('content')

<div class="container">
	<h1>{{ $news->title }}</h1>
	<p>{{ $news->description }}</p>
</div>

@endsection