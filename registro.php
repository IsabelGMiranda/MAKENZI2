<?php 
// seguridad de pagina
 session_start();
 error_reporting(0);
 $varsesion = $_SESSION['usuario'];


 if ($varsesion== null || $varsesion= ''){
  header("location: Login.php");
  die();
 }

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/anillos.css">
  <link rel="stylesheet" type="text/css" href="css/registro.css">
  <link rel="stylesheet" type="text/css" href="css/pr.css">
   <title>DISEÑOS EXCLUSIVOS MK</title>
       <link rel="shortcut icon" href="IMG/icono.png" type="image/x-icon">
</head>
<body>
  <header>
    <nav class="navegacion">
      <ul class="menu">
        <li><a href="registro.php">REGISTRAR PRODUCTO</a></li>
        <li><a href="mostrarAnillos.php">ANILLOS</a></li>
        <li><a href="MostrarCollares.php">COLLARES</a>
          
        </li>


        <li><a href="mostrarPulceras.php">PULCERAS</a></li>
                <li><a href="ENVIOS/envios.php">ENVIOS</a></li>

        <li><a href="cerrar_Sesion.php">CERRAR SESION </a>
          
        </li>
      </ul>
    </nav>
  </header>
  <?php
include("conexion2.php");
$usuarios= "SELECT * FROM prueba2 where cat=''";
?>

    <form action="guardarp.php" method="POST" enctype="multipart/form-data">
      <H2> REGISTRAR PRODUCTOS <H2><br>  

      <H4><font color="BLACK">  NOMBRE DEL PRODUCTO: </font><H4> <input type="text" name="nombre"  value="" REQUIRED>
      <H4><font color="BLACK">  INGRESA PRECIO: </font><H4> <input type="text" name="precio"  value="" REQUIRED>
      <H4><font color="BLACK">  INGRESA DESCRIPCION:</font><H4> <input type="text" name="descripcion" value="" REQUIRED>
            <br><br>
      <H4><font color="BLACK">  SELECCIONA CATEGORIA </font><H4>
            <select name="cat" REQUIRED> 
              <option>Pulceras</option>
              <option>Anillos</option>
              <option>Collares</option>
            </select> <br><br>

            
        <input type="file" name="Imagen" REQUIRED  >
        <input type="submit" name="Aceptar" value="Agregar Producto">
        <br><br>
    </form>



</body>
</html>




