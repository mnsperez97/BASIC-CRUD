<?php 

$con = mysqli_connect("localhost","root","","mundo");
$pais = $_POST['pais'];
$query = "SELECT pais FROM paises WHERE pais = '$pais' ";
$sql = mysqli_query($con,$query);
	if($re = mysqli_fetch_array($sql)){
		mysqli_query($con,"DELETE FROM paises WHERE pais = '$pais'"); 
		echo "<script>alert('Usuario Eliminado Exitosamente'); window.location.href='index.php';</script>";
	}else{
		echo "No se pueden eliminar los datos";
	}

 ?>