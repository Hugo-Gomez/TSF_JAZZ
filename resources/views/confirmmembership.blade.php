@extends('structure')

@section('stylesheet')
  <link href="../public/css/confirm.css" type="text/css" rel="stylesheet">
@endsection

@section('titre')
    <h2>Confirmation d'abonnement</h2>
@endsection

@section('contenu')
<img src="../public/img/confirm.gif"  alt="">

<p style="padding-top:20px;">
  Votre abonnement a bien été pris en compte, vous allez désormais recevoir toute notre actualité par email.
</p>
<br />
<div class="confirmlink">
<a href="{{ url('/') }}"><i class="fa fa-home" ></i> Retour à la page d'accueil </a>
</div>
@endsection
