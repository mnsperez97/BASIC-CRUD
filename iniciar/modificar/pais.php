<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../../css/estilos.css">
	<meta charset="UTF-8">
	<title>Modificar - Pais</title>
</head>
<body>
	<h2 class="titulo">Elija el pais a eliminar</h2>
<div class="contenedor">
	<a href="../destruirses.php">Cerrar Sesion</a>
	<form action="paisM.php" method="POST" accept-charset="utf-8" class="formulario">
		<select name="pais" class="sl">
			<?php $con = mysqli_connect("localhost","root","","mundo");
				  $query = "SELECT pais FROM paises";
				  $sql = mysqli_query($con,$query);
				 while( $row = mysqli_fetch_array($sql)){?>
			<div class="form-group">
				<option value="<?php echo $row['pais']; ?>"><?php echo $row['pais']; }?></option>
			</div>
		</select>
		<div class="form-group">
			<input type="text" name="nuevoN" placeholder="Nuevo Nombre del pais">
		</div>
		<input type="submit" value="Modificar" class="submit_btn">
	</form>
</div>
</body>
</html>