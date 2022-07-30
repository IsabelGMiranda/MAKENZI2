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

<?php
///// CONEXION A LA BASE DE DATOS /////////
$usuario='root';
$contraseña='';
$host='localhost';
$base='tienda';

try {
   		$conexion = new PDO('mysql:host='.$host.';dbname='.$base, $usuario, $contraseña);
	} 
	catch (PDOException $e) 
	{
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/envios.css">
  <title>DISEÑOS EXCLUSIVOS MK</title>
       <link rel="shortcut icon" href="IMG/icono.png" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <header>
    <nav class="navegacion">
      <ul class="menu">
        <li><a href="../registro.php">REGISTRAR PRODUCTO</a></li>
        <li><a href="../mostrarAnillos.php">ANILLOS</a></li>
        <li><a href="../MostrarCollares.php">COLLARES</a>
          
        </li>
        <li><a href="../mostrarPulceras.php">PULCERAS</a></li>
        <li><a href="envios.php">ENVIOS</a></li>
        <li><a href="../cerrar_Sesion.php">CERRAR SESION </a>
      </ul>
    </nav>
  </header>

	<body>
		<header>
			<div class="alert alert-info">
			<h3> Envios </h3>
			</div>
		</header>

		<section>
			<table class="col-md-12">
				<tr class="bg-primary">
					<th class="pad-basic">Id cliente</th>
					<th class="pad-basic">nombre </th>
					<th class="pad-basic">correo </th>
					<th class="pad-basic">telefono </th>
					<th class="pad-basic">estado</th>
					<th class="pad-basic">direccion</th>
					<th class="pad-basic">colonia</th>
					<th class="pad-basic">municipio</th>
					<th class="pad-basic">cp</th>



				<tr>

				<?php

				$query="SELECT Al.id,Al.nombre, Al.correo, Al.telefono,
							   Carr.estado, Carr.direccion ,Carr.colonia, Carr.municipio , Carr.cp
						FROM clientes Al
						INNER JOIN envios Carr ON Al.id = Carr.id_envio";

						//INNER JOIN ventas Gru ON Al.id_grupo = Gru.id_grupo";

				$consulta=$conexion->query($query);
				while ($fila=$consulta->fetch(PDO::FETCH_ASSOC))
					{
						echo'
						<tr>
						<td>'.$fila['id'].'</td>
						<td>'.$fila['nombre'].'</td>
						<td>'.$fila['correo'].'</td>
						<td>'.$fila['telefono'].'</td>
						<td>'.$fila['estado'].'</td>
						<td>'.$fila['direccion'].'</td>
						<td>'.$fila['colonia'].'</td>
					    <td>'.$fila['municipio'].'</td>
					    <td>'.$fila['cp'].'</td>
						</tr>
						';
					}


				?>

			</table>
		</section>
		<br></br>

</body>
</html>
