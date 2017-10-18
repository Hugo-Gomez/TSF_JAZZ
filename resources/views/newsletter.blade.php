@extends('structure')

@section('stylesheet')
	<link rel="stylesheet" type="text/css" href="../public/css/form.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
@endsection

@section('titre')
    <h2>S'abonner à la Newsletter</h2>
@endsection

@section('contenu')
<p>
  Pour ne rater aucune actualité et recevoir chaque semaine par email des informations sur les émissions et les nouveautés de la radio LP Jazz, n'hésitez pas à vous incrire à notre Newsletter.
</p>
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
                        </div><!-- End Left Inputs -->

                        <!-- Right Inputs -->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Prénom -->
                            <input type="text" name="firstname" id="firstname" required="required" class="form" placeholder="Prénom" />
                        </div><!-- End Right Inputs -->

                        <!-- Email center -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                        </div><!-- End Email center -->

                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">S'abonner</button>
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Merci !</strong> Votre inscription a bien été prise en compte.
                        </div>
                    </div>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->


@endsection
