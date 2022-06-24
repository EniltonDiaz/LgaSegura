<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
if(isset($_SESSION["usuario"])){
    header("location:validar.php");
}else{
    header("location:../view/login.php");
}

$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","pruebas");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_tipousuario']==1){ //usuario
    header("location:../view/list2.php");

}else
if($filas['id_tipousuario']==2){ //administrador
header("location:../view/list.php");
}
else{
    ?>
<?php
    include("../index.html");
    ?>
<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);