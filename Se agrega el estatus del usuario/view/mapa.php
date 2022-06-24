<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Google Maps</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>

<body>

    <div style="font-family:copperplate">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="imagenes/cerdo2.png">
                <img src="imagenes/cerdo2.png" alt="logo" style="width:60px;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="usuario.php" class="btn btn-outline-secondary text-white">Regresar</a>
                </li>

            </ul>
        </nav>
    </div>
    <center>
        <div id="mapa"></div>
    </center>
    <div class="row mt-3">

        <div class="col-md-12">
            <center>
                <h2 class="h2s">Direcciónes de los estadios de la Liga MX</h2>
                <?php include('../php/app.php'); ?>
            </center>
        </div>

    </div>
    <script>
    function initialize() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap'
        };
        map = new google.maps.Map(document.getElementById('mapa'), {
            mapOptions
        });
        map.setTilt(50);
        // Crear múltiples marcadores desde la Base de Datos 
        var marcadores = [
            <?php include('../php/marcadores.php'); ?>
        ];
        // Creamos la ventana de información para cada Marcador
        var ventanaInfo = [
            <?php include('../php/info_marcadores.php'); ?>
        ];

        // Creamos la ventana de información con los marcadores 
        var mostrarMarcadores = new google.maps.InfoWindow(),
            marcadores, i;
        // Colocamos los marcadores en el Mapa de Google 
        for (i = 0; i < marcadores.length; i++) {
            var position = new google.maps.LatLng(marcadores[i][1], marcadores[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: marcadores[i][0]
            });
            // Colocamos la ventana de información a cada Marcador del Mapa de Google 
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    mostrarMarcadores.setContent(ventanaInfo[i][0]);
                    mostrarMarcadores.open(map, marker);
                }
            })(marker, i));

            // Centramos el Mapa de Google para que todos los marcadores se puedan ver 
            map.fitBounds(bounds);
        }
        // Aplicamos el evento 'bounds_changed' que detecta cambios en la ventana del Mapa de Google, también le configramos un zoom de 14 
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(14);
            google.maps.event.removeListener(boundsListener);
        });
    }
    // Lanzamos la función 'initMap' para que muestre el Mapa con Los Marcadores y toda la configuración realizada 
    google.maps.event.addDomListener(window, 'load', initMap);
    </script>

</body>

</html>