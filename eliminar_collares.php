<?php

   include("conexion2.php");
   
   $id = $_REQUEST['id'];

   // Crear actualizacion de datos llamando a variables
   $query = "DELETE FROM prueba2  WHERE id = '$id'";

   $resultado = $conexion->query($query);
    
   if ($resultado){
       
         header("Location:MostrarCollares.php");

   }else{
      echo "no se insert";
   }
?>

