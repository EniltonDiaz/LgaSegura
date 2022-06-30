<?php
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
session_start();
if(isset($_SESSION["correo"])){
    header("location:validar.php");
}else{
    header("location:../index.php");
}

$_SESSION['correo']=$correo;

$conexion=mysqli_connect("localhost","root","","pruebas");

$consulta="SELECT*FROM usuarios where correo='$correo' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_tipousuario']==1){ //usuario
    header("location: ../vista/usuario.php");

}else
if($filas['id_tipousuario']==2){ //administrador
header("location:../vista/lista.php");
}
else{
    ?>
<?php
    include("../index.php");
    ?>
<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);