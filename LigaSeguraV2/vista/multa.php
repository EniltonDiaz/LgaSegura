<?php
session_start();
require_once '../modelo/config.php';
if(!isset($_SESSION["correo"])){
    header("location:../index.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multa</title>
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="images/logo.jpg">
            <img src="images/logo.jpg" style="width:60px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="usuario.php" class="btn btn-outline-secondary text-white">Regresar</a>
                </li>
                <li class="nav-item">
                    <a style="margin-left: 15px" href="../maps-master/index.html"
                        class="btn btn-outline-secondary text-white">Ver
                        Estadios</a>
                </li>
                <li class="nav-item active"> <a class="btn btn-outline-danger text-white" style="margin-left: 15px"
                        class="nav-link" href="salir.php">Cerrar sesión<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="font-family:copperplate">
        <center><br>
            <h1 style="font-family:didot" class="bg-dark text-white">Bienvenido usuario
                <b><?php echo $_SESSION["correo"]; ?>
            </h1>
        </center>
    </div>
    <?php

$queryResult = $pdo->query("SELECT multa FROM usuarios WHERE correo = '".$_SESSION["correo"]."' ");
$row=$queryResult->fetch(PDO::FETCH_ASSOC);
    if( $row['multa']==0) {
        echo '<center><div class="alert alert-seccess"><h1>No tiene ninguna multa</h1></div></center>';
    
    }
    if( $row['multa']>0) {
        ?>
    <center>
        <div class="container" style="font-family:copperplate"><br>

            <table style="font-family:copperplate" width="80%" border="1" cellpadding="3" cellspacing="2">
                <tr class="bg-dark">

                    <th>
                        <center>
                            <font color="white"> Multa $
                        </center>
                    </th>
                    <th>
                        <center>
                            <font color="white">Motivo de Multa
                        </center>
                    </th>

                </tr>
                <?php 
               require_once('../modelo/config.php');
               $queryResult = $pdo->query("SELECT * FROM usuarios WHERE correo = '".$_SESSION["correo"]."' ");
                   
                   while($row=$queryResult->fetch(PDO::FETCH_ASSOC)){
                    echo '<tr>
                            <td><center>'.$row['multa'].'</center></td>
                            <td><center>'.$row['motivo'].'</center></td>
                         </tr>';                
                
                   }
                ?>
            </table>
            <div style="font-family:copperplate"><br>
                <h2>
                    Pagar con <a href="https://www.paypal.me/eniltonidc"><img src="images/paypal.jpg"></a>
                </h2>
            </div>

            <hr>
            <hr>
        </div>
    </center>
    <?php
    }
    ?>

    <div class="container" align="center"> </div>

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
<?php
}

?>