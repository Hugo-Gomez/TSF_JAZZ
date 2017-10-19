@extends('structure')

@section('stylesheet')
  <link href="../public/css/confirm.css" type="text/css" rel="stylesheet">
@endsection

@section('titre')
    <h2>Confirmation d'envoi du morceau</h2>
@endsection

@section('contenu')
<img src="../public/img/confirm.gif"  alt="">

<p style="padding-top:20px;">
  Votre morceau a bien été envoyé. Si l'équipe LP Jazz le valide, nous nous ferons un plaisir de le diffuser sur nos ondes. <i class="fa fa-music"></i>
</p>
<br />
<div class="confirmlink">
<a href="{{ url('/') }}"><i class="fa fa-home" ></i> Retour à la page d'accueil </a>
</div>
@endsection
