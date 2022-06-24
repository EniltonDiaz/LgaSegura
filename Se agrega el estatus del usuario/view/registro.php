<?php
require_once '../model/config.php'; //conexion a la base de datos
$result=false;

if (!empty($_POST)) { //si se aprieta el boton...
	$nombre=$_POST['nombre'];
	$usuario=$_POST['usuario'];
	$contrasena= $_POST['contrasena'];
    $id_tipousuario= $_POST['id_tipousuario'];
    $estatus= $_POST['estatus'];
    $cargarFoto= ($_FILES['foto']['tmp_name']); //carga la imagen
    $foto=fopen($cargarFoto, 'rp'); //lee el archivo en binario
       
    $sql="INSERT INTO usuarios(nombre,usuario,estatus,contrasena,id_tipousuario,foto) VALUES (:nombre,:usuario,:estatus,:contrasena,:id_tipousuario,:foto)";
	$query = $pdo->prepare($sql);
	$result=$query->execute(['nombre'=>$nombre,'usuario'=>$usuario,'estatus'=>$estatus,'contrasena'=>$contrasena,'id_tipousuario'=>$id_tipousuario,'foto'=>$foto]);
       
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

    <title>Registro</title>
</head>

<body>
    <div style="font-family:copperplate">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="imagenes/cerdo2.png">
                <img src="imagenes/cerdo2.png" alt="logo" style="width:60px;">
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
            <form action="registro.php" method="post" enctype="multipart/form-data"><br>
                <h1 style="spacing: 10px" class="bg-dark text-white">Registrarse</h1><br><br>
                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Nombre<input
                        style="border: solid 1px #000000; " type="text" name="nombre" id="nombre"
                        placeholder="ingrese su nombre" class="form-control" required>
                </p>
                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Usuario
                    <input style="border: solid 1px #000000; " type="text" name="usuario" id="usuario"
                        placeholder="ingrese su usuario" class="form-control" required>
                </p>
                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Contraseña
                    <input style="border: solid 1px #000000; " type="password" name="contrasena" id="contrasena"
                        placeholder="ingrese su contraseña" class="form-control" required>
                </p>
                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Tipo de usuario
                    <select style="border: solid 1px #000000; " name="id_tipousuario" id="id_tipousuario"
                        class="form-control" required>
                        <option value="0">Seleccione un nivel</option>
                        <option value="1">Usuario</option>
                    </select>
                </p>
                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Estatus
                    <select style="border: solid 1px #000000; " name="estatus" id="estatus" class="form-control"
                        required>
                        <option value="normal">normal</option>
                    </select>
                </p>
                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Foto<input
                        style="border: solid 1px #000000; " type="file" name="foto" id="foto" class="form-control"
                        required>
                </p>
                <input type="submit" value="Registrar" class="btn btn-outline-secondary text-dark">
            </form>
        </center>




    </div>
</body>

</html>