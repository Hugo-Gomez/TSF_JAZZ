@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" > Dashboard </a></p>
  <h2>Agenda Table</h2>
  <div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>Title</th>
        <th>Date</th>
        <th>Time</th>
        <th>Artist</th>
        <th>Info</th>
        <th>Club</th>
        <th>Address</th>
        <th>Town</th>
        <th>Zipcode</th>
        <th>Telephone</th>
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

  <h3>Add News </h3>

  <form method="POST" action="/server.php/agenda/admin" enctype="multipart/form-data">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>The title </label>
      <input type="text" name="title" class="form-control">
    </div>

    <div class="form-group">
      <label>Time </label>
      <input type="text" name="time" class="form-control">
    </div>

    <div class="form-group">
      <label>Artist </label>
      <input type="text" name="artist" class="form-control">
    </div>

    <div class="form-group">
      <label>Info </label>
      <input type="text" name="info" class="form-control">
    </div>

    <div class="form-group">
      <label>Club </label>
      <input type="text" name="club" class="form-control">
    </div>

    <div class="form-group">
      <label>Address </label>
      <input type="text" name="address" class="form-control">
    </div>

    <div class="form-group">
      <label>Town </label>
      <input type="text" name="town" class="form-control">
    </div>

    <div class="form-group">
      <label>Zipcode </label>
      <input type="text" name="zipcode" class="form-control">
    </div>

    <div class="form-group">
      <label>Telephone </label>
      <input type="text" name="telephone" class="form-control">
    </div>


<!--     <div class="form-group">
        <label>Select image to upload:</label>
        <input type="file" name="img_agenda">
    </div> -->

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add new</button>
    </div>

  </form> 


</div>

@endsection