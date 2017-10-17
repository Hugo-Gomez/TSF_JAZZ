@extends('structure')

@section('titre')
    <h2>Programme</h2>
@endsection

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="../public/css/program.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
@endsection

@section('contenu')

    @foreach ($programs as $program)
        <div class="row">
            <div class="col m10 offset-m1">
                <div class="col m3">
                    <img src="../public/img/{{ $program->thumbnail }}"/>
                </div>
                <div class="col m9">
                    <p class="program-title">{{ $program->title }}</p>
                    <h1>{{ $program->hebdo_date }}</h1>
                    <br>
                    <p>{{ $program->description }}</p>
                </div>
            </div>
        </div>
    @endforeach

    <div class="separator"></div>

    @foreach ($program_items as $program_item)
        <div class="program-event">
            <h1 class="progevent-date">Emission du {{ date('d/m/Y', strtotime($program_item->date)) }}</h1>
            <br>
            <h3>{{ $program_item->subtitle }}</h3>
            <br>
            <p>{{ $program_item->description }}</p>
            <br>
        </div>
        <div class="separator progevent"></div>
    @endforeach

@endsection