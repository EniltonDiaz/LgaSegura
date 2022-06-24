<?php

session_start();
if(isset($_SESSION["usuario"])){
    header("location:../controller/validar.php");
}else{
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Iniciar Sesion</title>
</head>

<body>
    <div style="font-family:copperplate">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="imagenes/cerdo2.png">
                <img src="imagenes/cerdo2.png" alt="logo" style="width:60px;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="../index.php" class="btn btn-outline-secondary text-white">Regresar al inicio</a>
                </li>
                <li class="nav-item">
                    <a href="registro.php" class="btn btn-outline-secondary text-white"
                        style="margin-left: 15px">Regristrarse</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container" style="font-family:copperplate">
        <form action="../controller/validar.php" method="post">
            <center><br><br>
                <h1 class="bg-dark text-white">Iniciar Sesion</h1>
                <br><br>
                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Usuario <input
                        style="border: solid 1px #000000; " type="text" class="form-control"
                        placeholder="ingrese su usuario" name="usuario" required></p><br>

                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Contraseña <input
                        style="border: solid 1px #000000; " type="password" class="form-control"
                        placeholder="ingrese su contraseña" name="contrasena" required></p>
            </center>
            <button type="submit" name="ingresar" class="btn btn-outline-dark">Ingresar</button>


        </form>



        <?php
if(isset($_REQUEST["ingresar"])){
    $usuario=$_POST["usuario"];
    $_SESSION["usuario"]=$usuario;

    
}
?>
    </div>
</body>

</html>
<?php
}
?>