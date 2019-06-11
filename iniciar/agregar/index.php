<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../css/estilos.css">
	<title>Lista para Agregar</title>
</head>
<body><?php if(isset($_SESSION['username'])){ ?>
<div class="contenedor">
	<a href="../destruirses.php">Cerrar Sesion</a>
	<h1>Formulario para Agregar</h1>
	<p>¿Que desea agregar?</p>
	<a href="continente.php">Continente</a>
	<a href="pais.php">Pais</a>
	<a href="estado.php">Estado</a>
	<a href="ciudad.php">Ciudad</a>
</div>
<?php } 
	if(!isset($_SESSION['username'])){echo "<script>alert('Inicia Sesion Para ver el Contenido'); window.location.href='../index.php';</script>";}	?>
</body>
</html>