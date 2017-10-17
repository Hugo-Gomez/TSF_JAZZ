@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" > Dashboard </a></p>
  <h2>Podcast Table</h2>
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>title</th>
        <th>description</th>
        <th>photo</th>
        <th>Effacer</th>
      </tr>
    </thead>
    <tbody>
  @foreach($data_podcasts as $data_podcast)
      <tr>
        <th><a href="{{ url('podcast/admin/'.$data_podcast->id) }}" > {{ $data_podcast->title }} </a></th>
        <th>{{ $data_podcast->description }}</th>  
        <th><img src="<?php echo asset("../storage/app/$data_podcast->thumbnail")?>" alt="{{ $data_podcast->title }}" height="50" width="50"></th>
        <th class="danger">
            <a href="{{ url('podcast/delete/'.$data_podcast->id) }}" class="btn btn-danger">
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
      <input type="text" name="titlePodcast" class="form-control">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="descriptionPodcast" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Select image to upload:</label>
        <input type="file" name="img_podcast">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add new</button>
    </div>

  </form> 


</div>

@endsection