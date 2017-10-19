@extends('layouts.app')

@section('content')

<div class="container">
<p><a href="{{ url('treasure/admin') }}" > Return Back </a></p>
<h3>Update The Agenda </h3>

  <form method="POST" action="/server.php/treasure/admin/{{ $treasure->id }}">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>Nom </label>
      <input type="text" name="last_nameTreasure" class="form-control" value="{{ $treasure->last_name }}" required="required">
    </div>

    <div class="form-group">
      <label>Prénom </label>
      <input type="text" name="first_nameTreasure" class="form-control" value="{{ $treasure->first_name }}" required="required">
    </div>

    <div class="form-group">
      <label>Âge </label>
      <input type="number" name="ageTreasure" class="form-control" value="{{ $treasure->age }}" required="required">
    </div>

    <div class="form-group">
      <label>Email </label>
      <input type=“email” name="emailTreasure" class="form-control" value="{{ $treasure->email }}" required="required">
    </div>

    <div class="form-group">
      <label>Téléphone </label>
      <input type="number" name="telephoneTreasure" class="form-control" value="{{ $treasure->telephone }}" required="required">
    </div>

    <div class="form-group">
      <label>Titre de la piste </label>
      <input type="text" name="track_titleTreasure" class="form-control" value="{{ $treasure->track_title }}" required="required">
    </div>

    <div class="form-group">
      <label>Artiste</label>
      <input type="text" name="artist_nameTreasure" class="form-control" value="{{ $treasure->artist_name }}" required="required">
    </div>

    <div class="form-group">
      <label>Année </label>
      <input type="number" name="yearTreasure" class="form-control" value="{{ $treasure->year }}" required="required">
    </div>

    <div class="form-group">
      <label>Label </label>
      <input type="text" name="labelTreasure" class="form-control" value="{{ $treasure->label }}" required="required"> 
    </div>

    <div class="form-group">
      <label>Description de la piste </label>
      <input type="text" name="track_descriptionTreasure" value="{{ $treasure->track_description }}" class="form-control" required="required"> 
    </div>


    <div class="form-group">
      <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </div>

  </form>

</div>

@endsection