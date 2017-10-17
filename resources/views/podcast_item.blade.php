@extends('structure')

@section('titre')
    <h2>Podcast</h2>
@endsection

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="../public/css/podcast.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
@endsection

@section('contenu')

    @foreach ($podcasts_hugo as $podcast)
        <div class="row">
            <div class="col m10 offset-m1">
                <div class="col m3">
                    <img src="../public/img/{{ $podcast->thumbnail }}"/>
                </div>
                <div class="col m9">
                    <p class="pod-title">{{ $podcast->title }}</p>
                    <p>{{ $podcast->description }}</p>
                </div>
            </div>
        </div>
    @endforeach

    <div class="separator"></div>

    @foreach ($podcast_items_hugo as $podcast_item)
            <div class="pod-thread">
                 <span class="poditem-date">{{ date('d/m/Y', strtotime($podcast_item->date)) }} : </span><a href="#!"><span class="poditem-title">{{ $podcast_item->title }}</span></a><span> par </span><span class="poditem-author">{{ $podcast_item->author }}</span><span> // Durée : {{ $podcast_item->duration }}</span>
            </div>
    @endforeach

@endsection
