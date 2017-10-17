@extends('layouts.app')

@section('content')

<div class="container">
<p><a href="{{ url('agenda/admin') }}" > Return Back </a></p>
<h3>Update The Agenda </h3>

  <form method="POST" action="/server.php/agenda/admin/{{ $agenda->id }}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>The title </label>
      <input type="text" name="title" class="form-control" value="{{ $agenda->title }}">
    </div>

    <div class="form-group">
      <label>Time </label>
      <input type="text" name="time" class="form-control" value="{{ $agenda->time }}">
    </div>

    <div class="form-group">
      <label>Artist </label>
      <input type="text" name="artist" class="form-control" value="{{ $agenda->artist }}">
    </div>

    <div class="form-group">
      <label>Info </label>
      <input type="text" name="info" class="form-control" value="{{ $agenda->info }}">
    </div>

    <div class="form-group">
      <label>Club</label>
      <textarea name="club" class="form-control"><?php echo $agenda->club; ?></textarea>
    </div>

    <div class="form-group">
      <label>Address </label>
      <input type="text" name="address" class="form-control" value="{{ $agenda->address }}">
    </div>

    <div class="form-group">
      <label>Town </label>
      <input type="text" name="town" class="form-control" value="{{ $agenda->town }}">
    </div>

    <div class="form-group">
      <label>Zipcode </label>
      <input type="text" name="zipcode" class="form-control" value="{{ $agenda->zipcode }}">
    </div>

    <div class="form-group">
      <label>Telephone </label>
      <input type="text" name="telephone" class="form-control" value="{{ $agenda->telephone }}">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>

  </form>

</div>

@endsection