
@extends('structure')

@section('stylesheet')
    <link href="../public/css/calendar.css" type="text/css" rel="stylesheet">
@endsection

@section('titre')
    <h2>Jazzenda</h2>
@endsection

@section('contenu')
        <div class="wrapper">
            <div id="calendarContainer"></div>
        </div>
        <div class="wrapper">
            <div id="organizerContainer"></div>
        </div>
@endsection

@section('javascript')
    <script type="text/javascript" src="../public/js/calendar.js"></script>
@endsection