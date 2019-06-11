<?php 
$con = mysqli_connect("localhost","root","","mundo");
$pais = $_POST['pais'];
$nuevoN = $_POST['nuevoN'];

$sql = "SELECT paises WHERE pais = '$pais'";
$query = mysqli_query($con,$sql);
if(isset($row = mysqli_fetch_array($query))){
	$sql2 = "UPDATE paises SET pais = '$nuevoN' WHERE pais = '$pais' ";
	$query2 = mysqli_query($con,$sql2);
	echo "<script>alert('Usuario Modificado Exitosamente'); window.location.href='index.php';</script>";
	}else{
		echo "No se han podido modificar los datos";
	}


 ?>