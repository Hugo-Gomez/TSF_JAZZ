@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" > Dashboard </a></p>
  <h2>Blog Table</h2>
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>nom</th>
        <th>email</th>
        <th>sujet</th>
        <th>message</th>
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