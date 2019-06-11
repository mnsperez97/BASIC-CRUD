<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../../css/estilos.css">
	<meta charset="UTF-8">
	<title>Agregar Continente</title>
</head>
<body>
	<h1 class="titulo">Agregar Continente</h1>
<div class="contenedor">
	<a href="../destruirses.php">Cerrar Sesion</a>
	<form action="continenteA.php" method="POST" accept-charset="utf-8" class="formulario">
		<div class="form-group">
			<input type="text" name="continente" placeholder="Escriba continente">
		</div>
		<div class="form-group">
			<input type="text" name="pais" placeholder="Escriba pais">
		</div>
		<div class="form-group">
			<input type="text" name="estado" placeholder="Escriba estado">
		</div>
		<div class="form-group">
			<input type="text" name="ciudad" placeholder="Escriba ciudad">
		</div>
		<input type="submit" value="Agregar" class="submit_btn">
	</form>
</div>
</body>
</html>