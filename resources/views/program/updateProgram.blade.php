@extends('layouts.app')

@section('content')

<div class="container">
<p><a href="{{ url('program/admin') }}" > Return Back </a></p>
<h3>Mettre à jour le Program </h3>

  <form method="POST" action="/server.php/program/admin/{{ $program->id }}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>Le titre </label>
      <input type="text" name="titleProgram" class="form-control" value="{{ $program->title }}">
    </div>

    <div class="form-group">
      <label>Le sous-titre </label>
      <input type="text" name="subtitleProgram" class="form-control" value="{{ $program->subtitle }}">
    </div>

    <div class="form-group">
      <label>La description</label>
      <textarea name="descriptionProgram" class="form-control"><?php echo $program->description; ?></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </div>

  </form>

</div>

@endsection