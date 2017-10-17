@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" > Dashboard </a></p>
  <h2>News Table</h2>
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>date</th>
        <th>title</th>
        <th>description</th>
        <th>Effacer</th>
      </tr>
    </thead>
    <tbody>
  @foreach($data as $datas)
      <tr>
        <th>{{ $datas->date }}</th>
        <th><a href="{{ url('admin/'.$datas->id) }}" > {{ $datas->title }} </a></th>
        <th>{{ $datas->description }}</th>
        <th class="danger">
            <a href="{{ url('delete/'.$datas->id) }}" class="btn btn-danger">
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

  <form method="POST" action="/server.php/home">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>The title </label>
      <input type="text" name="titleNews" class="form-control">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="descriptionNews" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add news</button>
    </div>

  </form>


</div>

@endsection