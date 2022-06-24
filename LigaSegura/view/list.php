<?php
session_start();
require_once '../model/config.php';

$queryResult = $pdo->query("SELECT * FROM usuarios WHERE id_tipousuario=1");

if(!isset($_SESSION["usuario"])){
    header("location:login.php");
}else{
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
    <link rel="stylesheet" href="Diseño/dis.css">
    <title>PROYECTO</title>
</head>

<body>


    <body>
        <nav style="font-family:copperplate" class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="imagenes/logomx.jpg">
                <img src="imagenes/logomx.jpg" alt="logo" style="width:60px;">
            </a>
            <ul class="navbar-nav">
                <li><a href="salir.php" class="btn btn-outline-danger">Cerrar Sesion</a></li>

            </ul>
        </nav>
        <center>
            <div>
                <h1 style="font-family:didot" class="bg-dark text-white">Bienvenido Directivo
                    <b><?php echo $_SESSION["usuario"]; ?>
                </h1>

                <table style="font-family:copperplate" width="80%" border="1" cellpadding="3" cellspacing="2"
                    bordercolor="#999999" bgcolor="rgb(41, 3, 3)">
                    <tr>
                        <th>
                            <font color="white">
                                <center>ID</center>
                        </th>
                        <th>
                            <font color="white">
                                <center>Nombre</center>
                        </th>
                        <th>
                            <font color="white">
                                <center>Usuario</center>
                        </th>
                        <th>
                            <font color="white">
                                <center>Estatus</center>
                        </th>
                        <th colspan="2">
                            <font color="white">
                                <center>Opciones</center>
                        </th>
                    </tr>
                    <?php
			 while($row=$queryResult->fetch(PDO::FETCH_ASSOC)){
				echo '<tr>';
				echo '<td><center><font color="white">' . $row['id_user'] . '</center></td>';
				echo '<td><center><font color="white">' . $row['nombre'] . '</center></td>';
				echo '<td><center><font color="white">' . $row['usuario'] . '</center></td>';	
                echo '<td><center><font color="white">' . $row['estatus'] . '</center></td>';
				echo '<td><center><a href="update.php?id='. $row['id_user'].'">Editar</a></center></td>';
				echo '<td><center><a href="delete.php?id='. $row['id_user'].'">Eliminar</a></center></td>';			
				echo '</tr>';
			}
			?>

            </div>
        </center>

    </body>

</html>
<?php
}
?>