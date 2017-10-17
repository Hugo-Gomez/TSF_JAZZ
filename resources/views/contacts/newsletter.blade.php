@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" > Dashboard </a></p>
  <h2>Blog Table</h2>
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>nom</th>
        <th>prénom</th>
        <th>email</th>
      </tr>
    </thead>
    <tbody>
  @foreach($data_newsletters as $data_newsletter)
      <tr>
        <th> {{ $data_newsletter->lastname }} </th>
        <th>{{ $data_newsletter->name }}</th>  
        <th>{{ $data_newsletter->email }}</th>
      </tr>
    @endforeach
    </tbody>
  </table>


</div>

@endsection