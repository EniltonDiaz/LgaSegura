<?php

session_start();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>PROYECTO</title>
</head>

<body style="background:#000000">
    <nav style="font-family:copperplate" class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="imagenes/logomx.jpg">
            <img src="imagenes/logomx.jpg" alt="logo" style="width:60px;">
        </a>
        <ul class="navbar-nav">
            <li><a href="../index.php" class="btn btn-primary">Inicio</a>
        </ul>
    </nav>
    <center>
        <div style="font-family:copperplate">
            <h1>
                <font color="white">¡Haz salido de la aplicacion!.
            </h1>
            <h2>
                <font color="white">Vuelve pronto para que no te pierdas de las novedades de
                    la Liga MX!.
            </h2>
        </div>

        <img src="imagenes/futuro.jpg" class="rounded" alt="Cinque Terre" width="900" height="336">
    </center>


</body>

</html>