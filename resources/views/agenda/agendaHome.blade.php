@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" >Retourner au Dashboard</a></p>
  <h2>Agenda</h2>
  <div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>Titre</th>
        <th>Date</th>
        <th>Heure</th>
        <th>Artiste</th>
        <th>Info</th>
        <th>Club</th>
        <th>Adresse</th>
        <th>Ville</th>
        <th>Code postal</th>
        <th>Téléphone</th>
        <th>Effacer</th>
      </tr>
    </thead>
    <tbody>
  @foreach($data_agendas as $data_agenda)
      <tr>
        <th><a href="{{ url('agenda/admin/'.$data_agenda->id) }}" > {{ $data_agenda->title }} </a></th>
        <th> {{ $data_agenda->date }} </th>
        <th>{{ $data_agenda->time }}</th>
        <th> {{ $data_agenda->artist }} </th> 
        <th> {{ str_limit($data_agenda->info, 20)  }} </th> 
        <th> {{ $data_agenda->club }} </th> 
        <th> {{ $data_agenda->address }} </th> 
        <th> {{ $data_agenda->town }} </th>
        <th> {{ $data_agenda->zipcode }} </th> 
        <th> {{ $data_agenda->telephone }} </th>   
        <th class="danger">
            <a href="{{ url('agenda/delete/'.$data_agenda->id) }}" class="btn btn-danger">
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

  <h3>Ajouter un évènement</h3>

  <form method="POST" action="/server.php/agenda/admin" enctype="multipart/form-data">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>Titre </label>
      <input type="text" name="title" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Heure</label>
      <input type="text" name="time" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Artiste </label>
      <input type="text" name="artist" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Info </label>
      <input type="text" name="info" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Club </label>
      <input type="text" name="club" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Adresse </label>
      <input type="text" name="address" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Ville </label>
      <input type="text" name="town" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Code postal </label>
      <input type="text" name="zipcode" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Téléphone </label>
      <input type="text" name="telephone" class="form-control" required="required"> 
    </div>


<!--     <div class="form-group">
        <label>Select image to upload:</label>
        <input type="file" name="img_agenda">
    </div> -->

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>

  </form> 


</div>

@endsection