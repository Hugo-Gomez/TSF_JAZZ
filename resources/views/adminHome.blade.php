@extends('layouts.app')

@section('content')

<div class="container">
  <h2>News Table</h2>
  <table class="table">
    <thead>
      <tr>
        <th>date</th>
        <th>title</th>
        <th>description</th>
      </tr>
    </thead>
    <tbody>
	@foreach($data as $datas)
      <tr>
        <th>{{ $datas->date }}</th>
        <th><a href="{{ url('admin/'.$datas->id) }}" > {{ $datas->title }} </a></th>
        <th>{{ $datas->description }}</th>
      </tr>
    @endforeach
    </tbody>
  </table>

  <h3>Add News </h3>

  <form method="POST" action="/server.php/admin">
    <div class="form-group">
      <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add news</button>
    </div>

  </form>


</div>

@endsection