<?php
session_start();
require_once '../model/config.php';
if(!isset($_SESSION["usuario"])){
    header("location:login.php");
}else{
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Liga Segura</title>
</head>

<body>
    <div style="font-family:copperplate">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="imagenes/cerdo2.png">
                <img src="imagenes/cerdo2.png" alt="logo" style="width:75px;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="../maps-master/index.html" class="btn btn-outline-secondary text-white">Ver Estadios</a>
                </li>
                <li class="nav-item">
                    <a href="salir.php" class="btn btn-outline-danger text-white" style="margin-left: 15px">Cerrar
                        Sesión</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container" style="font-family:copperplate">
        <center><br>
            <h1 style="font-family:didot" class="bg-dark text-white">Bienvenido usuario
                <b><?php echo $_SESSION["usuario"]; ?>
            </h1>
        </center>
    </div>

    <center>
        <div class="container" style="font-family:copperplate"><br>

            <table style="font-family:copperplate" width="80%" border="1" cellpadding="3" cellspacing="2"
                bordercolor="#999999" bgcolor="rgb(192,192,192)">
                <tr class="bg-dark">

                    <th>
                        <font color="white">Nombre
                    </th>
                    <th>
                        <font color="white">Usuario
                    </th>
                    <th>
                        <font color="white">Estatus
                    </th>
                    <th>
                        <font color="white">Foto
                    </th>
                </tr>
                <?php 
               $queryResult = $pdo->query("SELECT * FROM usuarios WHERE usuario = '".$_SESSION["usuario"]."' ");
                
               while($row=$queryResult->fetch(PDO::FETCH_ASSOC)){
                    echo '<tr>
                            <td><font color="white">'.$row['nombre'].'</td>
                            <td><font color="white">'.$row['usuario'].'</td>
                            <td><font color="white">'.$row['estatus'].'</td>
                            <td><img src="data:image/jpg;base64,'.base64_encode($row['foto']).'"></td>
                         </tr>';                
                }
           
                ?>
            </table>


        </div>
    </center>


</body>

</html>
<?php
}
?>