@extends('layouts.app')

@section('content')

<div class="container">
  <h2>News Table</h2>
  <table class="table">
    <thead>
      <tr>
        <th>title</th>
        <th>description</th>
        <th>photo</th>
      </tr>
    </thead>
    <tbody>
  @foreach($data_podcasts as $data_podcast)
      <tr>
        <th><a href="{{ url('podcast/admin/'.$data_podcast->id) }}" > {{ $data_podcast->title }} </a></th>
        <th>{{ $data_podcast->description }}</th>  
        <th><img src="{{ asset('$data_podcast->thumbnail') }}" alt="profile Pic" height="50" width="50">
        <th>
            <a href="{{ url('podcast/delete/'.$data_podcast->id) }}" class="btn btn-default">
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

  <form method="POST" action="/server.php/podcast/admin" enctype="multipart/form-data">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>The title </label>
      <input type="text" name="title" class="form-control">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Select image to upload:</label>
        <input type="file" name="img_file">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add news</button>
    </div>

  </form> 


</div>

@endsection