<?php

   include("conexion2.php");
   
   $id = $_REQUEST['id'];

   $nombre = $_POST['nombre'];
   $precio= $_POST['precio'];
   $descripcion= $_POST['descripcion'];
   $cat= $_POST['cat'];
   $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

   // Crear actualizacion de datos llamando a variables
   $query = "UPDATE prueba2 SET nombre='$nombre', precio='$precio', descripcion='$descripcion', cat='$cat', Imagen='$Imagen' WHERE id = '$id'";

   $resultado = $conexion->query($query);
    
   if ($resultado){
       if ($cat=='Anillos') {
         header("Location:mostrarAnillos.php");

       }
       if ($cat=='Collares') {
         header("Location:MostrarCollares.php");

       }
       if ($cat=='Pulceras') {
         header("Location:mostrarPulceras.php");

       }
   }else{
      echo "no se insert";
   }
?>
