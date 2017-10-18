@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" > Dashboard </a></p>
  <h2>News Table</h2>
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>La date</th>
        <th>le titre</th>
        <th>La description</th>
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

  <h3>Ajouter un News </h3>

  <form method="POST" action="/server.php/home">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>le titre </label>
      <input type="text" name="titleNews" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>La description</label>
      <textarea name="descriptionNews" class="form-control" required="required"></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">S'ajouter</button>
    </div>

  </form>


</div>

@endsection
