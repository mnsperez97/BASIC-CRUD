<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../css/estilos.css">
	<title>Eliminar - Estado</title>
</head>
<body>
	<h2 class="titulo">Elija el estado a eliminar</h2>
<div class="contenedor">
	<a href="../destruirses.php">Cerrar Sesion</a>
	<form action="estadoE.php" method="POST" accept-charset="utf-8" class="formulario">
		<select name="estado">
			<?php $con = mysqli_connect("localhost","root","","mundo");
				  $query = "SELECT estado FROM estados";
				  $sql = mysqli_query($con,$query);
				 while( $row = mysqli_fetch_array($sql)){?>
			<div class="form-group">
				<option value="<?php echo $row['estado']; ?>"><?php echo $row['estado']; }?></option>
			</div>
		</select>
		<input type="submit" value="Eliminar" class="submit_btn">
	</form>
</div>
</body>
</html>