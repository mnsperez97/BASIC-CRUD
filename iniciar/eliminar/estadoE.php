<?php 

$con = mysqli_connect("localhost","root","","mundo");
$estado = $_POST['estado'];
$query = "SELECT estado FROM estados WHERE estado = '$estado' ";
$sql = mysqli_query($con,$query);
	if($re = mysqli_fetch_array($sql)){
		mysqli_query($con,"DELETE FROM estados WHERE estado = '$estado'"); 
		echo "<script>alert('Usuario Eliminado Exitosamente'); window.location.href='index.php';</script>";
	}else{
		echo "No se pueden eliminar los datos";
	}

 ?>