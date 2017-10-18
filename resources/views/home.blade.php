@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté!

                    <div class="container-fluid">
                        <h1>Page Administrateur</h1>
                        <div class="row">
                            <a href="{{ url('home') }}" ><div class="col-sm-4  col-lg-4 panel panel-info well-lg" style="background-color:lavender;"> NEWS </div></a>
                            <a href="{{ url('blog/admin') }}" ><div class="col-sm-4 col-lg-4 panel panel-info well-lg" style="background-color:lavenderblush;"> BLOG </div></a>
                            <a href="{{ url('newsletter/admin') }}" ><div class="col-sm-4  col-lg-4 panel panel-info well-lg" style="background-color:lavender;"> NEWSLETTER </div></a>
                        </div>

                        <div class="row">
                            <a href="{{ url('podcast/admin') }}" ><div class="col-sm-4 col-lg-4 panel panel-info well-lg" style="background-color:lavenderblush;">PODCAST</div></a>
                            <a href="{{ url('program/admin') }}" ><div class="col-sm-4 col-lg-4 panel panel-info well-lg" style="background-color:lavender;">PROGRAMME</div></a>
                            <a href="{{ url('agenda/admin') }}" ><div class="col-sm-4 col-lg-4 panel panel-info well-lg" style="background-color:lavenderblush;">Agenda</div></a>
                        </div>

                        <div class="row">
                            <a href="{{ url('contact/admin') }}" ><div class="col-sm-4 col-lg-4 panel panel-info well-lg" style="background-color:lavender;">CONTACT</div></a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
