<?php 
session_start();
$conexion = mysqli_connect("localhost","root","","mundo");
	
if(isset($_POST['user']) && !empty($_POST['user']) &&
isset($_POST['pw']) && !empty($_POST['pw'])){
$usuario = $_POST['user'];
$pass    = $_POST['pw'];
$sql = "SELECT * FROM acceso WHERE login_acceso = '$usuario' AND clave_acceso = '$pass' ";
	$sql2 = mysqli_query($conexion,$sql);
	$sesion = mysqli_fetch_array($sql2);
	
	if($pass == $sesion['clave_acceso']){
			$_SESSION['username'] = $usuario;
			header("Location:sesion.php");

	}else{
		echo "<script>alert('combinacion erronea'); window.location.href='ingreso.php';</script>";
		//header("Location:index.php");
		
	}
		
	
}else{

	echo "<script>alert('Debes llenar ambos campos'); window.location.href='ingreso.php';</script>";
	//header("Location:ingreso.php");
	
}

 ?>