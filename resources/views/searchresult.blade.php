@extends('structure')

@section('stylesheet')
@endsection

@section('titre')
    <h2>Résultat de la recherche</h2>
@endsection

@section('contenu')

@foreach ($query as $querys)
	<p>{{ $querys->title }}</p>
@endforeach

@endsection
