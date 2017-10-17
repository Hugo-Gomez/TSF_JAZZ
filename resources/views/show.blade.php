@extends('layouts.app')

@section('content')

<div class="container">
<p><a href="{{ url('home') }}" > Return Back </a></p>
<h3>Update The News </h3>

  <form method="POST" action="/server.php/admin/{{ $news->id }}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>The title </label>
      <input type="text" name="titleNews" class="form-control" value="{{ $news->title }}">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="descriptionNews" class="form-control"><?php echo $news->description; ?></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>

  </form>

</div>

@endsection