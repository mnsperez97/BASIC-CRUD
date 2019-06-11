<?php 

$con = mysqli_connect("localhost","root","","mundo");
$continente = $_POST['continente'];
$query = "SELECT continente FROM continentes WHERE continente = '$continente' ";
$sql = mysqli_query($con,$query);
	if($re = mysqli_fetch_array($sql)){
		mysqli_query($con,"DELETE FROM continentes WHERE continente = '$continente'"); 
		echo "<script>alert('Usuario Eliminado Exitosamente'); window.location.href='index.php';</script>";
	}else{
		echo "No se pueden eliminar los datos";
	}

 ?>