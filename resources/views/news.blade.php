@extends('structure')

@section('titre')
    <h2>News</h2>
@endsection

@section('contenu')
    @foreach ($news_items as $news_item)
        <h6>{{ $news_item->title }}</h6>
        <br>
        <p>{{ date('d/m/Y', strtotime($news_item->date)) }}</p>
        <br>
        <p>{{ $news_item->description }}</p>
        <br>  
    @endforeach
@endsection
