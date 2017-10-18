@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" > Dashboard </a></p>
  <h2>Program Table</h2>
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>title</th>
        <th>subtitle</th>
        <th>description</th>
        <th>date</th>
        <th>photo</th>
        <th>Effacer</th>
      </tr>
    </thead>
    <tbody>
  @foreach($data_programs as $data_program)
      <tr>
        <th><a href="{{ url('program/admin/'.$data_program->id) }}" > {{ $data_program->title }} </a></th>
        <th> {{ $data_program->subtitle }} </th>
        <th>{{ $data_program->description }}</th>
        <th> {{ $data_program->hebdo_date }} </th> 
        <th><img src="<?php echo asset("../storage/app/$data_program->thumbnail")?>" alt="{{ $data_program->title }}" height="50" width="50"></th> 
        <th class="danger">
            <a href="{{ url('program/delete/'.$data_program->id) }}" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash" aria-hidden="true">
                    Effacer
                </span>
            </a>
        </th>
      </tr>
    @endforeach
    </tbody>
  </table>

  <h3>Add News </h3>

  <form method="POST" action="/server.php/program/admin" enctype="multipart/form-data">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>The title </label>
      <input type="text" name="titleProgram" class="form-control">
    </div>

    <div class="form-group">
      <label>The subtitle </label>
      <input type="text" name="subtitleProgram" class="form-control">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="descriptionProgram" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Select image to upload:</label>
        <input type="file" name="img_program">
    </div> 

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add news</button>
    </div>

  </form> 


</div>

@endsection