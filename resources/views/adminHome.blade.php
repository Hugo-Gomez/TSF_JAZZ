@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" >Retourner au Dashboard</a></p>
  <h2>News</h2>
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>Date</th>
        <th>Titre</th>
        <th>Description</th>
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
                <span aria-hidden="true">
                    Effacer
                </span>
            </a>
        </th>
      </tr>
    @endforeach
    </tbody>
  </table>

  <h3>Ajouter une News </h3>

  <form method="POST" action="/server.php/home">

  {!! csrf_field() !!}

    <div class="form-group">
      <label>Titre </label>
      <input type="text" name="titleNews" class="form-control" required="required">
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="descriptionNews" class="form-control" required="required"></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>

  </form>


</div>

@endsection
