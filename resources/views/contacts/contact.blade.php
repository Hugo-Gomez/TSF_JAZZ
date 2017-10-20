@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" >Retourner au Dashboard </a></p>
  <h2>Contact</h2>
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>Nom</th>
        <th>Email</th>
        <th>Sujet</th>
        <th>Message</th>
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
