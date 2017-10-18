@extends('layouts.app')

@section('content')

<div class="container">
<p><a href="{{ url('podcast/admin') }}" > Return Back </a></p>
<h3>Mettre à jour le Podcasts </h3>

  <form method="POST" action="/server.php/podcast/admin/{{ $podcast->id }}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>Le titre </label>
      <input type="text" name="titlePodcast" class="form-control" value="{{ $podcast->title }}" required="required">
    </div>

    <div class="form-group">
      <label>La description</label>
      <textarea name="descriptionPodcast" class="form-control" required="required"><?php echo $podcast->description; ?></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </div>

  </form>

</div>

@endsection