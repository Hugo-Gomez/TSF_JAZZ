@extends('structure')

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="../public/css/search.css">
@endsection

@section('titre')
    <h2>Résultat de la recherche</h2>
@endsection

@section('contenu')

<!-- Agenda section -->

<h1 class="searchtitle" style="text-transform: uppercase;">Agenda</h1>
<br>
<div class="separator mini"></div>
<br>
<ul class="searchresult">
	@if ($queryAgenda->isNotEmpty())
		@foreach ($queryAgenda as $querys)
			<li>• <a href="{{ url('/jazzenda') }}">{{ $querys->title }}</a></li>
			<p style="margin-left: 5%;"><span class="red">Artiste : </span>{{ $querys->artist }} <span class="red">le</span> {{ date('d/m/Y', strtotime($querys->date)) }}</p>
		@endforeach
	@else
		<h1 style="text-align: center;">Pas de résultat dans cette catégorie</h1>
	@endif
</ul>

<br>

<div class="separator"></div>

<!-- Blog section -->

<br>
<h1 class="searchtitle" style="text-transform: uppercase;">Blog</h1>
<br>
<div class="separator mini"></div>
<br>
<ul class="searchresult">
	@if ($queryBlog->isNotEmpty())
		@foreach ($queryBlog as $querys)
			<li>• <a href="{{ $querys->link }}" target="_blank">{{ $querys->author }}</a><span> {{ $querys->description }}</span></li>
		@endforeach
	@else
		<h1 style="text-align: center;">Pas de résultat dans cette catégorie</h1>
	@endif
</ul>

<br>

<div class="separator"></div>

<!-- News section -->

<br>
<h1 class="searchtitle" style="text-transform: uppercase;">News</h1>
<br>
<div class="separator mini"></div>
<br>
<ul class="searchresult">
	@if ($queryNews->isNotEmpty())
		@foreach ($queryNews as $querys)
			<li>• <a href="{{ url('/news'.$querys->id) }}">{{ $querys->title }}</a><span> ({{ date('d/m/Y', strtotime($querys->date)) }})</span></li>
		@endforeach
	@else
		<h1 style="text-align: center;">Pas de résultat dans cette catégorie</h1>
	@endif
</ul>

<br>

<div class="separator"></div>

<!-- Podcast section -->

<br>
<h1 class="searchtitle" style="text-transform: uppercase;">Podcast</h1>
<br>
<div class="separator mini"></div>
<br>
<ul class="searchresult">
	@if ($queryPodcast_item->isNotEmpty())
		@foreach ($queryPodcast_item as $querys)
			<li >• <a href="{{ url('/podcast'.$querys->id_podcast) }}">{{ $querys->title }}</a><span> <span class="red">par</span> {{ $querys->author }}</span> (Podcast du : {{ date('d/m/Y', strtotime($querys->date)) }})</li>
		@endforeach
	@else
		<h1 style="text-align: center;">Pas de résultat dans cette catégorie</h1>
	@endif
</ul>

<br>

<div class="separator"></div>

<!-- Program section -->

<br>
<h1 class="searchtitle" style="text-transform: uppercase;">Program</h1>
<br>
<div class="separator mini"></div>
<br>
<ul class="searchresult">
	@if ($queryProgram_item->isNotEmpty())
		@foreach ($queryProgram_item as $querys)
			<li>• <a href="{{ url('/program'.$querys->id_program) }}">{{ $querys->title }}</a><span> <span class="red">//</span> {{ $querys->subtitle }}</span></li>
		@endforeach
	@else
		<h1 style="text-align: center;">Pas de résultat dans cette catégorie</h1>
	@endif
</ul>

<br>

<div class="separator"></div>



@endsection
