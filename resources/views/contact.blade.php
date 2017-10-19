@extends('structure')

@section('stylesheet')
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/form.css">
@endsection

@section('titre')
    <h2>Nous contacter</h2>
@endsection

@section('contenu')
<p>
  Une question, remarque ou suggestion ? N'hésitez pas à nous contacter, notre équipe se chargera de vous répondre dans les plus brefs délais.
</p>
<br />
<div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form method="POST" action="/server.php/contact">

											{!! csrf_field() !!}
                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="namecontact" required="required" class="form" placeholder="Nom" />
                            <!-- Email -->
                            <input type="email" name="mailcontact" required="required" class="form" placeholder="Email" />
                            <!-- Subject -->
                            <input type="text" name="subjectcontact" required="required" class="form" placeholder="Sujet" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Message -->
                            <textarea name="messagecontact" class="form textarea"  placeholder="Message"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" class="form-btn semibold">Envoyer</button>
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <div id="message"></div>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->


@endsection

@section('javascript')

  <script type="text/javascript">

     $(document).ready(function() {

       $("#order_form").submit(function(){


           $.ajax({
             url: 'haal/order',
             type: 'POST',
             data:$('#order_form').serialize(),
             success: function(data) {
                   if(data == 'OK') {
                       console.log("ok");
                       $('#message').html('<p>Thank you for your order.</p>');
                  } else { $('#message').html('<p>There is something wrong with form submission.</p>'); }
             }
           });

       });
     });
  </script>

@endsection
