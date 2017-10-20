@extends('layouts.app')

@section('content')

<div class="container">
  <p><a href="{{ url('admin') }}" >Retourner au Dashboard</a></p>
  <h2>Trésor des auditeurs</h2>
  <div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
        <th>Email</th>
        <th>Code postal</th>
        <th>Téléphone</th>
        <th>Titre de la piste</th>
        <th>Nom de l'artiste</th>
        <th>Année</th>
        <th>Label</th>
        <th>Description de la piste</th>
        <th>Fichier MP3</th>
        <th>Effacer</th>
      </tr>
    </thead>
    <tbody>
  @foreach($data_treasures as $data_treasure)
      <tr>
        <th> {{ $data_treasure->last_name }} </th>
        <th>{{ $data_treasure->first_name }}</th>
        <th> {{ $data_treasure->age }} </th>
        <th> {{ $data_treasure->email }} </th>
        <th> {{ $data_treasure->zip_code }} </th>
        <th> {{ $data_treasure->telephone }} </th>
        <th> {{ $data_treasure->track_title }} </th>
        <th> {{ $data_treasure->artist_name }} </th>
        <th> {{ $data_treasure->year }} </th>
        <th> {{ $data_treasure->label }} </th>
        <th> {{ $data_treasure->track_description }} </th>
        <th> {{ $data_treasure->file }} </th>
        <th class="danger">
            <a href="{{ url('treasure/delete/'.$data_treasure->id) }}" class="btn btn-danger">
                <span aria-hidden="true">
                    Effacer
                </span>
            </a>
        </th>
      </tr>
    @endforeach
    </tbody>
  </table>
  </div>
</div>

@endsection
