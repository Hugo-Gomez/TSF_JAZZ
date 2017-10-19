@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" >Retourner au Dashboard</a></p>
  <h2>Trésor des auditeurs</h2>
  <div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>Nom</th>
        <th>Prénom</th>
        <th>Âge</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Titre de la piste</th>
        <th>Nom de l'artiste</th>
        <th>Année</th>
        <th>Label</th>
        <th>Description de la piste</th>
        <th>File</th>
        <th>Effacer</th>
      </tr>
    </thead>
    <tbody>
  @foreach($data_treasures as $data_treasure)
      <tr>
        <th><a href="{{ url('treasure/admin/'.$data_treasure->id) }}" >  {{ $data_treasure->last_name }} </th>
        <th>{{ $data_treasure->first_name }}</th>
        <th> {{ $data_treasure->age }} </th> 
        <th> {{ $data_treasure->email }} </th> 
        <th> {{ $data_treasure->telephone }} </th> 
        <th> {{ $data_treasure->track_title }} </th>
        <th> {{ $data_treasure->artist_name }} </th> 
        <th> {{ $data_treasure->year }} </th> 
        <th> {{ $data_treasure->label }} </th>
        <th> {{ $data_treasure->track_description }} </th>
        <th> {{ $data_treasure->file }} </th>  
        <th class="danger">
            <a href="{{ url('treasure/delete/'.$data_treasure->id) }}" class="btn btn-danger">
                <span aria-hidden="true">
                    Effacer
                </span>
            </a>
        </th>
      </tr>
    @endforeach
    </tbody>
  </table>
  </div>

  <h3>Ajouter un nouveau </h3>

  <form method="POST" action="/server.php/treasure/admin" enctype="multipart/form-data">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>Nom </label>
      <input type="text" name="last_nameTreasure" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Prénom </label>
      <input type="text" name="first_nameTreasure" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Âge </label>
      <input type="number" name="ageTreasure" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Email </label>
      <input type=“email” name="emailTreasure" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Téléphone </label>
      <input type="number" name="telephoneTreasure" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Titre de la piste </label>
      <input type="text" name="track_titleTreasure" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Artiste</label>
      <input type="text" name="artist_nameTreasure" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Année </label>
      <input type="number" name="yearTreasure" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Label </label>
      <input type="text" name="labelTreasure" class="form-control" required="required"> 
    </div>

    <div class="form-group">
      <label>Description de la piste </label>
      <input type="text" name="track_descriptionTreasure" class="form-control" required="required"> 
    </div>

    <div class="form-group">
        <label>Select file to upload:</label>
        <input type="file" name="file_treasure">
    </div> 

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>

  </form> 


</div>

@endsection