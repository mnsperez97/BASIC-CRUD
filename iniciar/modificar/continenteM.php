<?php 
$con = mysqli_connect("localhost","root","","mundo");
$continente = $_POST['continente'];
$nuevoN = $_POST['nuevoN'];

$sql = "SELECT continentes WHERE continente = '$continente'";
$query = mysqli_query($con,$sql);
if(isset($row = mysqli_fetch_array($query))){
	$sql2 = "UPDATE continentes SET continente = '$nuevoN' WHERE continente = '$continente' ";
	$query2 = mysqli_query($con,$sql2);
	echo "<script>alert('Usuario Modificado Exitosamente'); window.location.href='index.php';</script>";
	}else{
		echo "No se han podido modificar los datos";
	}


 ?>