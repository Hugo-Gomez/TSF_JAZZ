@extends('layouts.app')

@section('content')

<div class="container">
	<h1>{{ $news->title }}</h1>
	<p>{{ $news->description }}</p>
</div>


<div class="container">

<h3>Update The News </h3>

  <form method="POST" action="/admin/{news}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>The title </label>
      <input type="text" name="title" class="form-control">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>

  </form>

</div>

@endsection