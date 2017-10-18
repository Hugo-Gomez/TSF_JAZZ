@extends('structure')

@section('titre')
    <h2>Podcast</h2>
@endsection

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="../public/css/podcast.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
@endsection

@section('contenu')

        <div class="row">
            <div class="col m10 offset-m1">
                <div class="col m3">
                    <img src="../public/img/{{ $podcasts_hugo->thumbnail }}"/>
                </div>
                <div class="col m9">
                    <p class="pod-title">{{ $podcasts_hugo->title }}</p>
                    <p>{{ $podcasts_hugo->description }}</p>
                </div>
            </div>
        </div>

    <div class="separator"></div>

    <ul class="playlist hidden">
    @foreach ($podcast_items_hugo as $podcast_item)
        <li data-podcast="{{ $podcast_item->id }}"audiourl="http://www.tsfjazz.com/{{ $podcast_item->file }}" cover="../public/img/{{ $podcasts_hugo->thumbnail }}" artist="{{ $podcast_item->author }}">{{ $podcast_item->title }}</li>
    @endforeach
	</ul>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Durée</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($podcast_items_hugo as $podcast_item)
                <tr data-podcast="{{ $podcast_item->id }}">
                    <td class="mesh-podcast-action"><i class="fa fa-play"></i><i class="fa fa-pause hidden"></i></td>
                    <td>{{ $podcast_item->title }}</td>
                    <td>{{ $podcast_item->author }}</td>
                    <td>{{ $podcast_item->duration }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        

@endsection
