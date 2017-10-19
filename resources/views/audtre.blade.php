@extends('structure')

@section('stylesheet')
	<link rel="stylesheet" type="text/css" href="../public/css/form.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
@endsection

@section('titre')
    <h2>Trésor des auditeurs</h2>
@endsection

@section('contenu')
  <p>Vous souhaitez écouter un morceau en particulier ou partager votre dernière trouvaille ? N'hésitez pas à nous transmettre vos coups de coeur. </p>
  <br />
<div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form method="POST" action="#">
                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" required="required" class="form" placeholder="Nom" />
                            <!-- Prénom -->
                            <input type="text" name="firstname" required="required" class="form" placeholder="Prénom" />
														<!-- Age -->
                            <input type="text" name="age" class="form" placeholder="Age" />
                            <!-- Email -->
                            <input type="email" name="mail" required="required" class="form" placeholder="Email" />
														<!-- Numéro de téléphone -->
                            <input type="number" name="telephone" class="form" placeholder="Numéro de téléphone" />
														<!-- Track description -->
														<textarea name="track_description" class="form textarea"  placeholder="Description du morceau"></textarea>
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Titre du morceau -->
                            <input type="text" name="track_title" required="required" class="form" placeholder="Titre du morceau" />
														<!-- Album -->
                            <input type="text" name="record" class="form" placeholder="Nom de l'album" />
                            <!-- Artiste -->
                            <input type="text" name="artiste_name" required="required" class="form" placeholder="Artiste" />
                            <!-- Année -->
														<div class="div_tres">
															<label class="label_tres">L'année </label>
	                            <input type="date" name="year" class="form" placeholder="Année" />
														</div>
														<!-- Label -->
                            <input type="text" name="label" class="form" placeholder="Label" />
														<!-- Fichier MP3 -->
														<div class="div_tres">
															<label class="label_tres">Fichier MP3 : </label>
	                            <input type="file" name="file" class="form" placeholder="Fichier MP3" />
														</div>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Partager votre morceau</button>
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Merci !</strong> Votre message a bien été transmis.
                        </div>
                    </div>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->


@endsection
