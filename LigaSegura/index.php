<?php
try{
$pdo = new PDO("mysql:host=localhost;dbname=pruebas","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e){
	echo $e->getMessage();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>League Security</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div style="font-family:copperplate">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="imagenes/logomx.jpg">
                <img src="view/imagenes/logomx.jpg" alt="logo" style="width:60px;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="view/login.php" class="btn btn-outline-secondary text-white">Iniciar Sesion</a>
                </li>
                <li class="nav-item">
                    <a href="view/registro.php" class="btn btn-outline-secondary text-white"
                        style="margin-left: 15px">Regristrarse</a>
                </li>
            </ul>
        </nav>
    </div>
</body>

</html>