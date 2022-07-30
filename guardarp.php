
<?php
   include("conexion2.php");

   $nombre = $_POST['nombre'];
   $precio = $_POST['precio'];
   $descripcion = $_POST['descripcion'];
   $cat = $_POST['cat'];
   
   $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

   $query ="INSERT INTO prueba2 (nombre,precio,descripcion,cat,Imagen) VALUES ('$nombre','$precio','$descripcion','$cat','$Imagen')";

   $resultado = $conexion->query($query);

   if ($resultado) {
       //header("Location:registro.php");
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
      echo "No se inserto";
   }
?>

