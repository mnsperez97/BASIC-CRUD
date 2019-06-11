<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../../css/estilos.css">
	<meta charset="UTF-8">
	<title>Modificar - Continente</title>
</head>
<body>
	<h2 class="titulo">Elija el continente a eliminar</h2>
<div class="contenedor">
	<a href="../destruirses.php">Cerrar Sesion</a>
	<form action="continenteM.php" method="POST" accept-charset="utf-8" class="formulario">
		<select name="continente" class="sl">
			<?php $con = mysqli_connect("localhost","root","","mundo");
				  $query = "SELECT continente FROM continentes";
				  $sql = mysqli_query($con,$query);
				 while( $row = mysqli_fetch_array($sql)){?>
			<div class="form-group">
				<option value="<?php echo $row['continente']; ?>"><?php echo $row['continente']; }?></option>
			</div>
		</select>
		<div class="form-group">
			<input type="text" name="nuevoN" placeholder="Nuevo Nombre del Continente">
		</div>
		<input type="submit" value="Modificar" class="submit_btn">
	</form>
</div>
</body>
</html>