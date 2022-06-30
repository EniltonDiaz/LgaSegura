<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>

    <link href="vista/css/bootstrap-4.3.1.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container"><a class="navbar-brand" href="#">Liga Segura</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="vista/registro.php">Registrarse <span
                                class="sr-only">(current)</span></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <hr>
    </div>
    <hr>

    <h3 class="text-center"> &nbsp; &nbsp;Correo Electronico</h3>
    <form style="margin: auto; width: 220px;">
        <input type="text" id="name" name="name" required minlength="0" maxlength="50" size="30">
    </form>
    <hr>
    <hr>
    <h3 class="text-center">Contraseña</h3>
    <form style="margin: auto; width: 220px;">
        <input type="text" id="name" name="name" required minlength="0" maxlength="50" size="30">
    </form>
    <hr>
    <div class="container" align="center"><button type="submit" name="ingresar"
            class="btn btn-outline-dark">Ingresar</button> </div>
    <hr>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-4">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active col-lg-7 offset-lg-0">
                            <img class="d-block w-100" src="vista/images/Marinela.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block"> </div>
                        </div>
                        <div class="carousel-item col-lg-7">
                            <img class="d-block w-100" src="vista/images/Oxxo.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item col-lg-7 offset-lg-0">
                            <img class="d-block w-100" src="vista/images/Coca.jpg" alt="Third slide">
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
        <div class="container"> </div>
        <div class="container text-white bg-dark p-4">
            <div class="row">
                <div class="col-6 col-md-8 col-lg-7">
                    <div class="row text-center">
                        <div class="col-sm-6 col-md-4 col-12 col-lg-5">
                            <ul class="list-unstyled">
                                <li class="btn-link"><a href="vista/privacidad.php">Politicas de privacidad</a></li>
                                <li class="btn-link"><a href="vista/terminos.php">Terminos y condiciones</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-5 col-6">
                    <address>
                        <strong>LigaSegura, Inc.</strong><br>
                        Carr. Monterrey - Saltillo Km. 61.5, Bosques de Santa Catarina, 66359 Santa Catarina,
                        N.L.<br>
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
        <script src="vista/js/jquery-3.3.1.min.js"></script>
        <script src="vista/js/popper.min.js"></script>
        <script src="vista/js/bootstrap-4.3.1.js"></script>

</body>

</html>