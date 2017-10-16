@extends('structure')

@section('titre')
    <h2>Programme</h2>
@endsection

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="../public/css/program.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
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
                    <p>{{ $program->description }}</p>
                </div>
            </div>
        </div>
    @endforeach

    <div class="separator"></div>

    <ul class="program-days">
        @foreach ($program_items as $program_item)
            <li>Emission du <a href="">{{ date('d/m/Y', strtotime($program_item->date)) }}</a></li>
        @endforeach
    </ul>

@endsection