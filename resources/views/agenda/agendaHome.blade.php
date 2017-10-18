@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" > Dashboard </a></p>
  <h2>Agenda Table</h2>
  <div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>Le titre</th>
        <th>Le date</th>
        <th>le temps</th>
        <th>l'artiste</th>
        <th>Info</th>
        <th>Club</th>
        <th>L'adresse</th>
        <th>La ville</th>
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
                <span class="glyphicon glyphicon-trash" aria-hidden="true">
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

  <form method="POST" action="/server.php/agenda/admin" enctype="multipart/form-data">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>Le titre </label>
      <input type="text" name="title" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>le temps </label>
      <input type="text" name="time" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>l'artiste </label>
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
      <label>L'adresse </label>
      <input type="text" name="address" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>La ville </label>
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
      <button type="submit" class="btn btn-primary">S'ajouter</button>
    </div>

  </form> 


</div>

@endsection