<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Ingreso</title>
</head>
<body>
<div class="contenedor">
	<h1 class="titulo">Iniciar Sesión</h1>
		<hr class="border"></hr>
	<form action="iniciar/verificar.php" method="post" accept-charset="utf-8" class="formulario">
		<div class="form-group">
			<input type="text" name="user" placeholder="Usuario" class="usuario">
		</div>
		<div class="form-group">
			<input type="password" name="pw" placeholder="Contraseña" class="password">
		</div>
		<input type="submit" value="Iniciar Sesión"  class= "submit_btn">
	</form>
</div>
</body>
</html>