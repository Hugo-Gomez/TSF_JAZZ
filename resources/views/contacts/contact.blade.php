@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" > Dashboard </a></p>
  <h2>Contact Table</h2>
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>Le nom</th>
        <th>L'email</th>
        <th>Le sujet</th>
        <th>La message</th>
      </tr>
    </thead>
    <tbody>
  @foreach($data_contacts as $data_contact)
      <tr>
        <th> {{ $data_contact->name }} </th>
        <th>{{ $data_contact->email }}</th>  
        <th>{{ $data_contact->subject }}</th>
        <th>{{ $data_contact->message }}</th>
      </tr>
    @endforeach
    </tbody>
  </table>


</div>

@endsection