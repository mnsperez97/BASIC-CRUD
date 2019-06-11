<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../../css/estilos.css">
	<meta charset="UTF-8">
	<title>Modificar - Estado</title>
</head>
<body>
	<h2 class="titulo">Elija el estado a eliminar</h2>
<div class="contenedor">
	<a href="../destruirses.php">Cerrar Sesion</a>
	<form action="estadoM.php" method="POST" accept-charset="utf-8" class="formulario">
		<select name="estado" class="sl">
			<?php $con = mysqli_connect("localhost","root","","mundo");
				  $query = "SELECT estado FROM estados";
				  $sql = mysqli_query($con,$query);
				 while( $row = mysqli_fetch_array($sql)){?>
			<div class="form-group">
				<option value="<?php echo $row['estado']; ?>"><?php echo $row['estado']; }?></option>
			</div>
		</select>
		<div class="form-group">
			<input type="text" name="nuevoN" placeholder="Nuevo Nombre del estado">
		</div>
		<input type="submit" value="Modificar" class="submit_btn">
	</form>
</div>
</body>
</html>