<?php

include_once '../model/config.php';
$result=false;
if(!empty($_POST)){
	$id = $_POST['id'];
	$nuevoNombre = $_POST['nombre'];
	$nuevoUsuario = $_POST['usuario'];
	$nuevoEstatus = $_POST['estatus'];

	$sql = "UPDATE usuarios SET nombre=:nombre,usuario=:usuario,estatus=:estatus WHERE id=:id";
	$query = $pdo->prepare($sql);
	$result = $query->execute(['id'=>$id,'nombre'=>$nuevoNombre,'usuario'=>$nuevoUsuario,'estatus'=>$nuevoEstatus]);
	$nombreValue = $nuevoNombre;
    $usuarioValue = $nuevoUsuario;
	$estatusValue = $nuevoEstatus;

} else{
	$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute(['id'=>$id]);
$row = $query->fetch(PDO::FETCH_ASSOC);
$nombreValue = $row['nombre'];
$usuarioValue = $row['usuario'];
$estatusValue = $row['estatus'];

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
    <title>Liga Segura</title>

<body>
    <div style="font-family:copperplate">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="imagenes/cerdo2.png">
                <img src="imagenes/cerdo2.png" alt="logo" style="width:60px;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="list.php" class="btn btn-outline-secondary text-white">Regresar</a>
                </li>

            </ul>
        </nav>
    </div>
    <div class="container" style="font-family:copperplate">
        <center>
            <?php
		if ($result==true){
			echo '<div class="alert alert-seccess">Completado!</div>';
		}
		?>
            <form action="update.php" method="post"><br><br>
                <h1 class="bg-dark text-white">Editar Usuario</h1>
                <br>
                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Nombre <input
                        style="border: solid 1px #000000; " class="form-control" type="text" name="nombre" id="nombre"
                        value="<?php echo $nombreValue; ?>" required></p><br>

                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Usuario <input
                        style="border: solid 1px #000000; " class="form-control" type="text" name="usuario" id="usuario"
                        value="<?php echo $usuarioValue; ?>" required></p><br>

                <p style="border: solid 1px #000000; " class="bg-secondary text-white">Estatus <input
                        style="border: solid 1px #000000; " class="form-control" type="text" name="estatus" id="estatus"
                        value="<?php echo $estatusValue; ?>" required></p><br>

                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" class="btn btn-outline-dark" value="Actualizar">
            </form>
        </center>
    </div>

</body>

</html>