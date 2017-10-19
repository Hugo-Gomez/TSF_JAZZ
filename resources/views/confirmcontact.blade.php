@extends('structure')

@section('stylesheet')
  <link href="../public/css/confirm.css" type="text/css" rel="stylesheet">
@endsection

@section('titre')
    <h2>Confirmation d'envoi du message</h2>
@endsection

@section('contenu')
<img src="../public/img/confirm.gif"  alt="">

<p style="padding-top:20px;">
  Votre message a bien été transmis, notre équipe se chargera de vous répondre par mail dans les plus brefs délais.
</p>
<br />
<div class="confirmlink">
<a href="{{ url('/') }}"><i class="fa fa-home" ></i> Retour à la page d'accueil </a>
</div>
@endsection
