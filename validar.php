<?php 
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion= mysqli_connect("localhost","root","","tienda");
$consulta= "SELECT * FROM usuario where usuario='$usuario' and contraseña='$contraseña'";

$resultado = mysqli_query($conexion,$consulta);

$filas= mysqli_num_rows($resultado);

if ($filas) {
	//echo "SE ENVIO PAH";
    header("location:registro.php");

} else {
	 ?>
	 <?php 
	 include("login.php");
	 ?>
	 <h1 class="bad">ERROR DE LA AUTENTIFICACION </h1>
	 <?php 
}
mysqli_free_result($resultado);
mysqli_close($conexion);
