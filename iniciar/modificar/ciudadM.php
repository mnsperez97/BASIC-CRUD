<?php 
$con = mysqli_connect("localhost","root","","mundo");
$ciudad = $_POST['ciudad'];
$nuevoN = $_POST['nuevoN'];

$sql = "SELECT ciudades WHERE ciudad = '$ciudad'";
$query = mysqli_query($con,$sql);
if(isset($row = mysqli_fetch_array($query))){
	$sql2 = "UPDATE ciudades SET ciudad = '$nuevoN' WHERE ciudad = '$ciudad' ";
	$query2 = mysqli_query($con,$sql2);
	echo "<script>alert('Usuario Modificado Exitosamente'); window.location.href='index.php';</script>";
	}else{
		echo "No se han podido modificar los datos";
	}


 ?>