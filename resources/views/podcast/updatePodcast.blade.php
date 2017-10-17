@extends('layouts.app')

@section('content')

<div class="container">
<p><a href="{{ url('podcast/admin') }}" > Return Back </a></p>
<h3>Update The Podcasts </h3>

  <form method="POST" action="/server.php/podcast/admin/{{ $podcast->id }}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>The title </label>
      <input type="text" name="titlePodcast" class="form-control" value="{{ $podcast->title }}">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="descriptionPodcast" class="form-control"><?php echo $podcast->description; ?></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>

  </form>

</div>

@endsection