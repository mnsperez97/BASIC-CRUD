<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/estilos.css">
	<title>Document</title>
</head>
<body>
	<?php session_start();
	if(isset($_SESSION['username'])){ ?>
	<a href="destruirses.php">Cerrar Sesion</a>
	<h2 class="titulo">Ha iniciado sesion</h2>

	<div class="contenedor">
		<p>¿Que deseas hacer?</p>
		<ul>
			<li><a href="agregar/index.php">Agregar</a></li>
			<li><a href="modificar/index.php">Modificar</a></li>
			<li><a href="eliminar/index.php">Eliminar</a></li>
			<li><a href="buscador.php">Buscar</a></li>
		</ul>
	</div>
	<?php }	if(!isset($_SESSION['username'])){echo "<script>alert('Inicia Sesion Para ver el Contenido'); window.location.href='../index.php';</script>";}	?>
</body>
</html>