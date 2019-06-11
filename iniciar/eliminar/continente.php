<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../css/estilos.css">
	<title>Eliminar - Continente</title>
</head>
<body>
	<h2 class="titulo">Elija el continente a eliminar</h2>
<div class="contenedor">
	<a href="../destruirses.php">Cerrar Sesion</a>
	<form action="continenteE.php" method="POST" accept-charset="utf-8" class="formulario">
		<select name="continente">
			<div class="form-group">
			<?php $con = mysqli_connect("localhost","root","","mundo");
				  $query = "SELECT continente FROM continentes";
				  $sql = mysqli_query($con,$query);
				 while( $row = mysqli_fetch_array($sql)){?>
				<option value="<?php echo $row['continente']; ?>"><?php echo $row['continente']; }?></option>
			</div>
		</select>
		<input type="submit" value="Eliminar" class="submit_btn" >
	</form>
</div>
</body>
</html>