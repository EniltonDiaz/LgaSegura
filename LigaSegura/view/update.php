<?php

include_once '../model/config.php';
$result=false;
if(!empty($_POST)){
	$id = $_POST['id'];
	$nuevoJugador = $_POST['jugador'];
	$nuevoEquipo = $_POST['equipo'];
	$nuevoTipo = $_POST['tipo'];

	$sql = "UPDATE jugadores SET jugador=:jugador,equipo=:equipo,tipo=:tipo WHERE id=:id";
	$query = $pdo->prepare($sql);
	$result = $query->execute(['id'=>$id,'jugador'=>$nuevoJugador,'equipo'=>$nuevoEquipo,'tipo'=>$nuevoTipo]);
	$jugadorValue = $nuevoJugador;
    $equipoValue = $nuevoEquipo;
	$tipoValue = $nuevoTipo;

} else{
	$id = $_GET['id'];
$sql = "SELECT * FROM jugadores WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute(['id'=>$id]);

$row = $query->fetch(PDO::FETCH_ASSOC);
$jugadorValue = $row['jugador'];
$equipoValue = $row['equipo'];
$tipoValue = $row['tipo'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROYECTO</title>

<body>
    <div class="container">
        <h1>Actualizar Jugador</h1>
        <a href="index.php">Inicio</a>
        <br>
        <a href="list.php">Regresar</a>
        <?php
		if ($result==true){
			echo '<div class="alert alert-seccess">Completado!</div>';
		}
		?>
        <form action="update.php" method="post">
            <label for="jugador">Jugador</label>
            <input type="text" name="jugador" id="jugador" value="<?php echo $jugadorValue; ?>" required>
            <br>
            <label for="equipo">Equipo</label>
            <input type="text" name="equipo" id="equipo" value="<?php echo $equipoValue; ?>" required>
            <br>
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" id="tipo" value="<?php echo $tipoValue; ?>" required>
            <br>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Actualizar">
        </form>
    </div>
    <br>
    <a href="list.php">Jugadores</a>

</body>

</html>