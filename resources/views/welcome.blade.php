@extends('structure')

@section('titre')
    <h2>Accueil // News</h2>
@endsection

@section('contenu')
    @foreach ($news as $new)
        <h6>{{ $new->title }}</h6>
        <br>
        <p>{{ date('d/m/Y', strtotime($new->date)) }}</p>
        <br>
        <p>{{ $new->description }}</p>
        <br>
        <div class="separator"></div>
        <br>
    @endforeach
@endsection
