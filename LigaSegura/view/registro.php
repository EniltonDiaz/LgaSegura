<?php
require_once '../model/config.php';
$result=false;
if (!empty($_POST)) {
	$nombre=$_POST['nombre'];
	$usuario=$_POST['usuario'];
	$contrasena= $_POST['contrasena'];
    $id_tipousuario= $_POST['id_tipousuario'];

	$sql="INSERT INTO usuarios(nombre,usuario,contrasena,id_tipousuario) VALUES (:nombre,:usuario,:contrasena,:id_tipousuario)";
	$query = $pdo->prepare($sql);
	$result=$query->execute(['nombre'=>$nombre,'usuario'=>$usuario,'contrasena'=>$contrasena,'id_tipousuario'=>$id_tipousuario]);
}
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
    <link rel="stylesheet" href="Diseño/registro.css">
    <title>Registro</title>
</head>

<body>
    <div style="font-family:copperplate">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="imagenes/logomx.jpg">
                <img src="imagenes/logomx.jpg" alt="logo" style="width:60px;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="login.php" class="btn btn-outline-secondary text-white">Iniciar Sesion</a>
                </li>
                <li class="nav-item">
                    <a href="../index.php" class="btn btn-outline-secondary text-white"
                        style="margin-left: 15px">Regresar al inicio</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container" style="font-family:copperplate">
        <?php
		if ($result==true){
			echo '<div class="alert alert-seccess">Registro Completo!</div>';
		}
		?>
        <center>
            <form action="registro.php" method="post">
                <h1 style="spacing: 10px" class="bg-dark text-white">Registrarse</h1><br>
                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Nombre<input
                        style="border: solid 1px #000000; " type="text" name="nombre" id="nombre"
                        placeholder="ingrese su nombre" class="form-control" required>
                </p>
                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Usuario
                    <input style="border: solid 1px #000000; " type="text" name="usuario" id="usuario"
                        placeholder="ingrese su usuario" class="form-control" required>
                </p>
                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Contraseña
                    <input style="border: solid 1px #000000; " type="text" name="contrasena" id="contrasena"
                        placeholder="ingrese su contraseña" class="form-control" required>
                </p>
                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Tipo de usuario
                    <select style="border: solid 1px #000000; " name="id_tipousuario" id="id_tipousuario"
                        class="form-control" required>
                        <option value="0">Seleccione un nivel</option>
                        <option value="1">Usuario</option>
                        <option value="2">Administrador</option>
                    </select>
                </p>
                <input type="submit" value="Registrar" class="btn btn-outline-secondary text-dark">
            </form>
        </center>




    </div>
</body>

</html>