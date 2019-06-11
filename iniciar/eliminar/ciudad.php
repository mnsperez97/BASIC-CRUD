<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../css/estilos.css">
	<title>Eliminar - Ciudad</title>
</head>
<body>
	<h2 class="titulo">Elija la ciudad a eliminar</h2>
<div class="contenedor">
	<a href="../destruirses.php">Cerrar Sesion</a>
	<form action="ciudadE.php" method="POST" accept-charset="utf-8" class="formulario">
		<select name="ciudad">
			<?php $con = mysqli_connect("localhost","root","","mundo");
				  $query = "SELECT ciudad FROM ciudades";
				  $sql = mysqli_query($con,$query);
				 while( $row = mysqli_fetch_array($sql)){?>
			<div class="form-group">
				<option value="<?php echo $row['ciudad']; ?>"><?php echo $row['ciudad']; }?></option>
			</div>
		</select>
		<input type="submit" value="Eliminar" class="submit_btn">
	</form>
</div>
</body>
</html>