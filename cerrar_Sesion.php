<?php 
// DESTRUIR SESION
 session_start();
 session_destroy();
 header("location:Login.php");

?>