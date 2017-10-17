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

                    You are logged in!

                    <div class="container-fluid">
                        <h1>Admin Control Page</h1>
                        <div class="row">
                            <div class="col-sm-4  col-lg-4" style="background-color:lavender;"><a href="{{ url('home') }}" > NEWS </a></div>
                            <div class="col-sm-4 col-lg-4" style="background-color:lavenderblush;"><a href="{{ url('blog/admin') }}" > BLOG </a></div>
                            <div class="col-sm-4  col-lg-4" style="background-color:lavender;"><a href="{{ url('newsletter/admin') }}" > NEWSLETTER </a></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 col-lg-4" style="background-color:lavenderblush;"><a href="{{ url('podcast/admin') }}" >PODCAST</a></div>
                            <div class="col-sm-4 col-lg-4" style="background-color:lavender;"><a href="{{ url('program/admin') }}" >PROGRAM</a></div>
                            <div class="col-sm-4 col-lg-4" style="background-color:lavenderblush;"><a href="{{ url('agenda/admin') }}" >Agenda</a></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 col-lg-4" style="background-color:lavender;"><a href="{{ url('contact/admin') }}" >CONTACT</a></div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
