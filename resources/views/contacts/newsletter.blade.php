@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" >Retourner au Dashboard </a></p>
  <h2>Newsletter</h2>
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
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
