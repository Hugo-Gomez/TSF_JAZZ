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
                    <form id="contact-us" method="post" action="#">
                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Nom" />
                            <!-- Prénom -->
                            <input type="text" name="firstname" id="firstname" required="required" class="form" placeholder="Prénom" />
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Titre du morceau -->
                            <input type="text" name="title" id="title" required="required" class="form" placeholder="Titre du morceau" />
                            <!-- Artiste -->
                            <input type="text" name="artiste" id="artiste" required="required" class="form" placeholder="Artiste" />
                            <!-- Album -->
                            <input type="text" name="album" id="album" class="form" placeholder="Album" />
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
