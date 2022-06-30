<?php
require_once '../modelo/config.php'; //conexion a la base de datos
$result=false;
if (!empty($_POST)){
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $contrasena= $_POST['contrasena'];
    $id_tipousuario= $_POST['id_tipousuario'];
    $estatus= $_POST['estatus'];
    $nombreFoto= $_FILES['foto']['name'];
    $temporal=$_FILES['foto']['tmp_name'];
    $carpeta='images';
    $ruta=$carpeta.'/'.$nombreFoto;
    move_uploaded_file($temporal,$carpeta.'/'.$nombreFoto);
        
    $sql="INSERT INTO usuarios(nombre,correo,estatus,contrasena,id_tipousuario,ruta) VALUES (:nombre,:correo,:estatus,:contrasena,:id_tipousuario,:ruta)";
    $query = $pdo->prepare($sql);
    $result=$query->execute(['nombre'=>$nombre,'correo'=>$correo,'estatus'=>$estatus,'contrasena'=>$contrasena,'id_tipousuario'=>$id_tipousuario,'ruta'=>$ruta]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liga Segura</title>
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="images/logo.jpg">
            <img src="images/logo.jpg" style="width:60px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"> <a class="nav-link" href="../index.php">Inicio<span
                            class="sr-only">(current)</span></a> </li>
            </ul>
        </div>
    </nav>

    </div>
    <br>
    <center>
        <?php
		if ($result==true){
			echo '<div class="alert alert-seccess">Registro Completo!</div>';
		}
		?>
        <form action="registro.php" method="post" enctype="multipart/form-data">
            <h3 class="text-center">Registro</h3>
            <br>
            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Nombre<input
                    style="border: solid 1px #000000; " type="text" name="nombre" id="nombre"
                    placeholder="ingrese su nombre" class="form-control" required>
            </p>
            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Correo
                <input style="border: solid 1px #000000; " type="email" name="correo" id="correo"
                    placeholder="ingrese su correo" class="form-control" required>
            </p>
            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Contraseña
                <input style="border: solid 1px #000000; " type="password" name="contrasena" id="contrasena"
                    placeholder="ingrese su contraseña" class="form-control" required>
            </p>
            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Tipo de usuario
                <select style="border: solid 1px #000000; " name="id_tipousuario" id="id_tipousuario"
                    class="form-control" required>
                    <option value="1">Usuario</option>
                </select>
            </p>
            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Estatus
                <select style="border: solid 1px #000000; " name="estatus" id="estatus" class="form-control" required>
                    <option value="normal">Normal</option>
                </select>
            </p>
            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Fotografia<input
                    style="border: solid 1px #000000; " type="file" name="foto" id="foto" class="form-control" required>
            </p>
            <input type="submit" value="Registrar" class="btn btn-outline-secondary text-dark"><br>
        </form>
    </center>
    <hr>
    <hr>
    <form style="margin: auto; width: 220px;">
    </form>
    <hr>
    <hr>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-4">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active col-lg-7 offset-lg-0">
                            <img class="d-block w-100" src="images/Marinela.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block"> </div>
                        </div>
                        <div class="carousel-item col-lg-7">
                            <img class="d-block w-100" src="images/Oxxo.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item col-lg-7 offset-lg-0">
                            <img class="d-block w-100" src="images/Coca.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="container"> </div>
        <div class="container text-white bg-dark p-4">
            <div class="row">
                <div class="col-6 col-md-8 col-lg-7">
                    <div class="row text-center">
                        <div class="col-sm-6 col-md-4 col-12 col-lg-5">
                            <ul class="list-unstyled">
                                <li class="btn-link"><a href="privacidad.php">Politicas de privacidad</a></li>
                                <li class="btn-link"><a href="terminos.php">Terminos y condiciones</a></li>
                                <li class="btn-link"><a
                                        href="https://www.facebook.com/profile.php?id=100082493510302"><img width="20"
                                            src="images/facebook.jpg"> Liga
                                        Segura</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-5 col-6">
                    <address>
                        <strong>LigaSegura, Inc.</strong><br>
                        Carr. Monterrey - Saltillo Km. 61.5, Bosques de Santa Catarina, 66359 Santa Catarina, N.L.<br>
                    </address>
                    <address>
                        <br>
                        <a href="mailto:#">ligasegura@gmail.com</a>
                    </address>
                </div>
            </div>
        </div>
        <footer class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>Copyright © LigaSegura. Reservados todos los derechos.</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap-4.3.1.js"></script>

</body>

</html>