<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../../css/estilos.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body><?php if(isset($_SESSION['username'])){ ?>
	<h1 class="titulo">Formulario para Modificar</h1>
<div class="contenedor">
	<a href="../destruirses.php">Cerrar Sesion</a>
	<p>¿Que desea modificar?</p>
	<a href="continente.php">Continente</a>
	<a href="pais.php">Pais</a>
	<a href="estado.php">Estado</a>
	<a href="ciudad.php">Ciudad</a>
</div>
<?php } 
	if(!isset($_SESSION['username'])){echo "<script>alert('Inicia Sesion Para ver el Contenido'); window.location.href='../index.php';</script>";}	?>
</body>
</html>