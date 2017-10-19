@extends('structure')

@section('stylesheet')
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/form.css">
@endsection

@section('titre')
    <h2>Trésor des auditeurs</h2>
@endsection

@section('contenu')
  <p>Vous souhaitez nous partager votre dernière production ? C'est par ici :</p>
  <br />
<div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form method="POST" action="/server.php/audtre">

											{!! csrf_field() !!}

                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" required="required" class="form" placeholder="Nom" />
                            <!-- Prénom -->
                            <input type="text" name="firstname" required="required" class="form" placeholder="Prénom" />
														<!-- Age -->
                            <input type="number" name="age" required="required" maxlength="3" class="form" placeholder="Age" />
                            <!-- Email -->
                            <input type="email" name="mail" required="required" class="form" placeholder="Email" />
														<!-- Numéro de téléphone -->
                            <input type="number" name="telephone" class="form" placeholder="Numéro de téléphone" />
														<!-- Code postal -->
                            <input type="number" name="zip_code" class="form" maxlength="5" placeholder="Code postal" />
														<!-- Fichier MP3 -->
														<div class="div_tres">
															<label class="label_tres">Fichier MP3 : </label>
	                            <input type="file" required="required" name="file" class="form" placeholder="Fichier MP3" />
														</div>

                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Titre du morceau -->
                            <input type="text" name="track_title" required="required" class="form" placeholder="Titre du morceau" />
														<!-- Album -->
                            <input type="text" name="album" class="form" placeholder="Nom de l'album" />
                            <!-- Artiste -->
                            <input type="text" name="artist_name" required="required" class="form" placeholder="Artiste / Groupe" />
                            <!-- Année -->
	                            <input type="number" name="year" maxlength="4" required="required" class="form" placeholder="Année" />
														<!-- Label -->
                            <input type="text" name="label" class="form" placeholder="Label" />
														<!-- Track description -->
														<textarea name="track_description" required="required" class="form textarea_tres"  placeholder="Décrivez en quelques mots..."></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" name="submit" class="form-btn semibold">Partager votre morceau</button>
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->


@endsection
