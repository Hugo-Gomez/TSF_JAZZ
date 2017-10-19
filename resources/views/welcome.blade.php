
@extends('structure')

@section('titre')
    <h2>Accueil // News</h2>
@endsection

@section('contenu')
    @php
      $i=0
    @endphp
    @foreach ($news as $new)
        @if ($i === 0)
        <img src="../public/img/news1.png" class="news1img"  alt="">
            <h6 class="news1title">{{ $new->title }}</h6>
            <p class="news1date">{{ date('d/m/Y', strtotime($new->date)) }}</p>
            <div class="news1both">
              </div>
              <p class="news1desc"><br>{{ $new->description }}</p>
            <br>
            <div class="separator"></div>
            <br>
        @else
            <h6>{{ $new->title }}</h6>
            <br>
            <p>{{ date('d/m/Y', strtotime($new->date)) }}</p>
            <br>
            <p>{{ $new->description }}</p>
            <br>
            <div class="separator"></div>
            <br>
        @endif
        @php
          $i=$i+1
        @endphp
    @endforeach
@endsection
