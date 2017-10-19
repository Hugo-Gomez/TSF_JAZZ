@extends('layouts.app')

@section('content')

<div class="container">
<p><a href="{{ url('agenda/admin') }}" >Retour</a></p>
<h3>Mettre à jour l'évènement</h3>

  <form method="POST" action="/server.php/agenda/admin/{{ $agenda->id }}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>Titre </label>
      <input type="text" name="title" class="form-control" value="{{ $agenda->title }}" required="required">
    </div>

    <div class="form-group">
      <label>Heure </label>
      <input type="text" name="time" class="form-control" value="{{ $agenda->time }}" required="required">
    </div>

    <div class="form-group">
      <label>Artiste </label>
      <input type="text" name="artist" class="form-control" value="{{ $agenda->artist }}" required="required">
    </div>

    <div class="form-group">
      <label>Info </label>
      <input type="text" name="info" class="form-control" value="{{ $agenda->info }}" required="required">
    </div>

    <div class="form-group">
      <label>Club</label>
      <textarea name="club" class="form-control" required="required"><?php echo $agenda->club; ?></textarea>
    </div>

    <div class="form-group">
      <label>Adresse </label>
      <input type="text" name="address" class="form-control" value="{{ $agenda->address }}" required="required">
    </div>

    <div class="form-group">
      <label>Ville </label>
      <input type="text" name="town" class="form-control" value="{{ $agenda->town }}" required="required">
    </div>

    <div class="form-group">
      <label>Code postal </label>
      <input type="text" name="zipcode" class="form-control" value="{{ $agenda->zipcode }}" required="required">
    </div>

    <div class="form-group">
      <label>Téléphone </label>
      <input type="text" name="telephone" class="form-control" value="{{ $agenda->telephone }}">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </div>

  </form>

</div>

@endsection