@extends('structure')

@section('titre')
    <h2>Podcast</h2>
@endsection

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="../public/css/podcast.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
@endsection

@section('contenu')

    <div class="tiles">
        <div class="col m10 offset-m1">
            @foreach ($podcasts as $podcast)
                <a class="tile" href="{{ url('/podcast'.$podcast->id) }}">
                    <img src="../public/img/{{ $podcast->thumbnail }}"/>
                    <div class="details">
                        <span class="title">{{ $podcast->title }}</span>
                        <span class="info">{{ $podcast->description }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

@endsection