<?php 

$con = mysqli_connect("localhost","root","","mundo");
$ciudad = $_POST['ciudad'];
$query = "SELECT ciudad FROM ciudades WHERE ciudad = '$ciudad' ";
$sql = mysqli_query($con,$query);
	if($re = mysqli_fetch_array($sql)){
		mysqli_query($con,"DELETE FROM ciudades WHERE ciudad = '$ciudad'"); 
		echo "<script>alert('Usuario Eliminado Exitosamente'); window.location.href='index.php';</script>";
	}else{
		echo "No se pueden eliminar los datos";
	}

 ?>