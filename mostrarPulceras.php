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
      </ul>
    </nav>
  </header>
<?php
include("conexion2.php");
$usuarios= "SELECT * FROM prueba2 where cat='Pulceras'";
?>
<center>
   <br><br><br><br>
    <table border="1" class="MYTABLE" align="center"  >
        
        <tr class="color">
          <th>id</th>
          <th>nombre</th>
          <th>precio</th>
          <th>descripcion</th>
          <th>categoria</th>
          <th>Imagen</th>
          <th colspan="2">Operaciones</th>
        </tr>
    <?php $resultado = mysqli_query($conexion,$usuarios);
    while ($row=mysqli_fetch_assoc($resultado)){
        ?>
     <tr>
                  <div class="table-items"></div><td><?php echo $row['id']; ?></td> <br><div>
                  <div class="table-items"><td><?php echo $row['nombre']; ?></td> <br><div>
                  <div class="table-items"><td><?php echo $row['precio']; ?></td> <br><div>
                  <div class="table-items"><td><?php echo $row['descripcion']; ?></td> <br><div>
                  <div class="table-items"><td><?php echo $row['cat']; ?></td> <br><div>


                  <td><img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>"/></td> <br>
                  <th><a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a></th>
                  <th><a href="eliminar_pulceras.php?id=<?php echo $row['id'];?>">Eliminar</a></th>
      </tr>

        <?php } ?>
      
  </center>
</body>
</html>


