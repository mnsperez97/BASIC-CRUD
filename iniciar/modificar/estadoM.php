<?php 
$con = mysqli_connect("localhost","root","","mundo");
$estado = $_POST['estado'];
$nuevoN = $_POST['nuevoN'];

$sql = "SELECT estados WHERE estado = '$estado'";
$query = mysqli_query($con,$sql);
if(isset($row = mysqli_fetch_array($query))){
	$sql2 = "UPDATE estados SET estado = '$nuevoN' WHERE estado = '$estado' ";
	$query2 = mysqli_query($con,$sql2);
	echo "<script>alert('Usuario Modificado Exitosamente'); window.location.href='index.php';</script>";
	}else{
		echo "No se han podido modificar los datos";
	}


 ?>