@extends('structure')

    <style>
       #map {
        height: 600px;
        width: 100%;
       }
    </style>
@section('titre')
        <h2>Liste des fréqences</h2>
@endsection

@section('contenu')

    <div id="map"></div>

    <script>

          // Init
          function initMap() {
            var centre = {lat: 47.04018214480667, lng: 2.449951171875};
            var map = new google.maps.Map(document.getElementById('map'), {
              // taille du zoom plus le point de centre quand la carte apparait (environ centre de la France actuellement)
              zoom: 6,
              center: centre,
              mapTypeId: 'roadmap'
            });

            var iconBase = '../public/img/markergeotest2.png';
            var icons = {
              parking: {
                icon: iconBase + 'parking_lot_maps.png'
              },
              library: {
                icon: iconBase + 'library_maps.png'
              },
              info: {
                icon: iconBase + 'music_maps.png'
              }
            };

            //variable pour éviter de copier/coller tout le longt texte à chaque fois
            var infowindow = new google.maps.InfoWindow();

            // Amiens
            //positions
            var amiens = {lat: 49.894067, lng: 2.2957529999999906};

            // Def du pointeur (position, title : hover)
            var markeramiens = new google.maps.Marker({
              position: amiens,
              map: map,
              icon: iconBase,
              title: 'Amiens : 99.8 MHz'
            });

            // Déf du text lors d'un click sur le pointeur
            google.maps.event.addListener(markeramiens, 'click', function() {
               infowindow.setContent('<h1>Amiens</h1>'+
                   '<p>Fréquence : 99.8 MHz</p>');
               infowindow.open(map, this);
            });

            // Bourg-en-Bresse
            var bourg = {lat: 46.20516749999999, lng: 5.225500699999998};

            var markerbourg = new google.maps.Marker({
              position: bourg,
              map: map,
              icon: iconBase,
              title: 'Bourg-en-Bresse : 98.5 MHz'
            });

            google.maps.event.addListener(markerbourg, 'click', function() {
                infowindow.setContent('<h1>Bourg-en-Bresse</h1>'+
                    '<p>Fréquence : 98.5 MHz</p>');
                infowindow.open(map, this);
            });

            // Chambéry
            var chambery = {lat: 45.564601, lng: 5.917780999999991};

            var markerchambery = new google.maps.Marker({
              position: chambery,
              map: map,
              icon: iconBase,
              title: 'Chambéry : 91.4 MHz'
            });

            google.maps.event.addListener(markerchambery, 'click', function() {
                infowindow.setContent('<h1>Chambéry</h1>'+
                    '<p>Fréquence : 91.4 MHz</p>');
                infowindow.open(map, this);
            });

            // Côtes d'Azur
            var cotedazur = {lat: 43.552847, lng: 7.017369000000031};

            var markercotedazur = new google.maps.Marker({
              position: cotedazur,
              map: map,
              icon: iconBase,
              title: 'Côtes d\'Azur : 98.1 MHz'
            });

            google.maps.event.addListener(markercotedazur, 'click', function() {
                infowindow.setContent('<h1>Côtes d\'Azur</h1>'+
                    '<p>Fréquence : 98.1 MHz</p>');
                infowindow.open(map, this);
            });

            // Laval
            var laval = {lat: 48.0785146, lng: -0.7669905999999855};

            var markerlaval = new google.maps.Marker({
              position: laval,
              map: map,
              icon: iconBase,
              title: 'Laval : 97.7 MHz'
            });

            google.maps.event.addListener(markerlaval, 'click', function() {
                infowindow.setContent('<h1>Laval</h1>'+
                    '<p>Fréquence : 97.7 MHz</p>');
                infowindow.open(map, this);
            });

            // Nevers
            var nevers = {lat: 46.99089600000001, lng: 3.162845000000061};

            var markernevers = new google.maps.Marker({
              position: nevers,
              map: map,
              icon: iconBase,
              title: 'Nevers : 90.2 MHz'
            });

            google.maps.event.addListener(markernevers, 'click', function() {
                infowindow.setContent('<h1>Nevers</h1>'+
                    '<p>Fréquence : 90.2 MHz</p>');
                infowindow.open(map, this);
            });

            // Orléans
            var orleans = {lat: 47.902964, lng: 1.9092510000000402};

            var markerorleans = new google.maps.Marker({
              position: orleans,
              map: map,
              icon: iconBase,
              title: 'Orléans : 106.7 MHz'
            });

            google.maps.event.addListener(markerorleans, 'click', function() {
                infowindow.setContent('<h1>Orléans</h1>'+
                    '<p>Fréquence : 106.7 MHz</p>');
                infowindow.open(map, this);
            });

            // Paris
            var paris = {lat: 48.856614, lng: 2.3522219000000177};

            var markerparis = new google.maps.Marker({
              position: paris,
              map: map,
              icon: iconBase,
              title: 'Paris : 89.9 MHz'
            });

            google.maps.event.addListener(markerparis, 'click', function() {
                infowindow.setContent('<h1>Paris</h1>'+
                    '<p>Fréquence : 89.9 MHz</p>');
                infowindow.open(map, this);
            });

            // Poitiers
            var poitiers = {lat: 46.58022400000001, lng: 0.34037499999999454};

            var markerpoitiers = new google.maps.Marker({
              position: poitiers,
              map: map,
              icon: iconBase,
              title: 'Poitiers : 96.6 MHz'
            });

            google.maps.event.addListener(markerpoitiers, 'click', function() {
                infowindow.setContent('<h1>Poitiers</h1>'+
                    '<p>Fréquence : 96.6 MHz</p>');
                infowindow.open(map, this);
            });

            // Valence
            var valence = {lat: 44.933393, lng: 4.892360000000053};

            var markervalence = new google.maps.Marker({
              position: valence,
              map: map,
              icon: iconBase,
              title: 'Valence : 89.5 MHz'
            });

            google.maps.event.addListener(markervalence, 'click', function() {
                infowindow.setContent('<h1>Valence</h1>'+
                    '<p>Fréquence : 89.5 MHz</p>');
                infowindow.open(map, this);
            });

            // Permet auto close (lors d'un click sur un autre marker ou sur la carte)
            google.maps.event.addListener(map, 'click', function(){
               infowindow.close();
            });

         }
        </script>

        <!-- Récupération de la map google avec la clé générée sur leur site -->
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcDJKm5DVpyVTegsrzTCmqSstIDAinnu8&callback=initMap">
        </script>


@endsection
