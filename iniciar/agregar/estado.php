<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../css/estilos.css">
	<title>Agregar Estado</title>
</head>
<body>
	<h1 class="contenedor">Agregar Estado</h1>
<div class="contenedor">
	<a href="../destruirses.php">Cerrar Sesion</a>
	<form action="estadoA.php" method="POST" accept-charset="utf-8" class="formulario">
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