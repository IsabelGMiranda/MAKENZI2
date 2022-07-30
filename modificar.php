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
        <li><a href="ENVIOS/envios.php">ENVIOS</a></li>

        <li><a href="mostrarPulceras.php">PULCERAS</a></li>
        <li><a href="cerrar_Sesion.php">CERRAR SESION </a>
      </ul>
    </nav>
  </header>
  <?php
           include("conexion2.php");
           $id = $_REQUEST['id'];
           $query = "SELECT * FROM prueba2 WHERE id ='$id'";
           $resultado = $conexion->query($query);
           $row = $resultado->fetch_assoc();

           ?>
                   
  <center>
    <form action="actualizar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
      <H2>ACTUALIZAR PRODUCTO<H2>
      <H3>Nombre del Producto:</H3><input type="text" REQUIRED name="nombre" placeholder="Nombre del producto" value="<?php echo $row['nombre']; ?>"/><br><br>
      <H3>Precio:</H3><input type="text" REQUIRED name="precio" placeholder="Ingresa Precio" value="<?php echo $row['precio']; ?>"/><br><br>
      <H3>Descripcion:</H3><input type="text" REQUIRED name="descripcion" placeholder="Ingresa descripcion" value="<?php echo $row['descripcion']; ?>"/><br><br> 
      <H3>Categoria:</H3><input type="text" REQUIRED name="cat" placeholder="Ingresa descripcion" value="<?php echo $row['cat']; ?>"/><br><br> 
      <img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>"/><br><br>


        <input type="file" name="Imagen" REQUIRED><br>
        <input type="submit" name="Aceptar"><br>
    </form>
  </center>



</body>
</html>
