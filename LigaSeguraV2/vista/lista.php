<?php
session_start();
require_once '../modelo/config.php';

$queryResult = $pdo->query("SELECT * FROM usuarios WHERE id_tipousuario=1");

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
                <li class="nav-item active"> <a class="btn btn-outline-danger text-white" class="nav-link"
                        href="salir.php">Cerrar sesión<span class="sr-only">(current)</span></a></li>
            </ul>
        </div>
    </nav>
    <hr>
    <h1 class="text-center"> Bienvenido administrador <b><?php echo $_SESSION["correo"]; ?></h1>

    <center>
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
                        <center>Correo electronico</center>
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
				echo '<td><center><font color="white">' . $row['id'] . '</center></td>';
				echo '<td><center><font color="white">' . $row['nombre'] . '</center></td>';
				echo '<td><center><font color="white">' . $row['correo'] . '</center></td>';	
                echo '<td><center><font color="white">' . $row['estatus'] . '</center></td>';
				echo '<td><center><a href="update.php?id='. $row['id'].'">Editar</a></center></td>';
				echo '<td><center><a href="delete.php?id='. $row['id'].'">Eliminar</a></center></td>';			
				echo '</tr>';
			}
			?>

    </center>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.3.1.js"></script>

</body>

</html>
<?php
}
?>