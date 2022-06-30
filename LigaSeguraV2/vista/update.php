<?php

include_once '../modelo/config.php';
$result=false;
if(!empty($_POST)){
	$id = $_POST['id'];
	$nuevoNombre = $_POST['nombre'];
	$nuevoCorreo = $_POST['correo'];
	$nuevoEstatus = $_POST['estatus'];
    $nuevoMulta = $_POST['multa'];
    $nuevoMotivo = $_POST['motivo'];

	$sql = "UPDATE usuarios SET nombre=:nombre,correo=:correo,estatus=:estatus,multa=:multa,motivo=:motivo WHERE id=:id";
	$query = $pdo->prepare($sql);
	$result = $query->execute(['id'=>$id,'nombre'=>$nuevoNombre,'correo'=>$nuevoCorreo,'estatus'=>$nuevoEstatus,'multa'=>$nuevoMulta,'motivo'=>$nuevoMotivo]);
	$nombreValue = $nuevoNombre;
    $correoValue = $nuevoCorreo;
	$estatusValue = $nuevoEstatus;
    $multaValue = $nuevoMulta;
    $motivoValue = $nuevoMotivo;

} else{
	$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute(['id'=>$id]);
$row = $query->fetch(PDO::FETCH_ASSOC);
$nombreValue = $row['nombre'];
$correoValue = $row['correo'];
$estatusValue = $row['estatus'];
$multaValue = $row['multa'];
$motivoValue = $row['motivo'];

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
                <li class="nav-item active"> <a class="nav-link" href="lista.php">Regresar<span
                            class="sr-only">(current)</span></a> </li>
            </ul>
        </div>
    </nav>
    <br>

    <center>
        <?php
		if ($result==true){
			echo '<div class="alert alert-seccess">Cambio exitoso!</div>';
		}
		?>
        <form action="update.php" method="post">
            <h1 class="bg-dark text-white">Editar Usuario</h1>
            <br>
            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Nombre <input
                    style="border: solid 1px #000000; " class="form-control" type="text" name="nombre" id="nombre"
                    value="<?php echo $nombreValue; ?>" required></p><br>

            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Correo electronico <input
                    style="border: solid 1px #000000; " class="form-control" type="email" name="correo" id="correo"
                    value="<?php echo $correoValue; ?>" required></p><br>

            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Estatus <input
                    style="border: solid 1px #000000; " class="form-control" type="text" name="estatus" id="estatus"
                    value="<?php echo $estatusValue; ?>" required></p><br>

            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Multa <input
                    style="border: solid 1px #000000; " class="form-control" type="number" name="multa" id="multa"
                    value="<?php echo $multaValue; ?>"></p><br>

            <p style="border: solid 1px #000000; " class="bg-secondary text-white">Motivo de Multa <input
                    style="border: solid 1px #000000; " class="form-control" type="text" name="motivo" id="motivo"
                    value="<?php echo $motivoValue; ?>"></p><br>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" class="btn btn-outline-dark" value="Actualizar"><br>
        </form>
    </center>
    <hr>
    <hr>
    <form style="margin: auto; width: 220px;">
    </form>
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