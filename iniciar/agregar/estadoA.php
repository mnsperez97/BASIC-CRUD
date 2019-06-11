<?php session_start();
$con = mysqli_connect("localhost", "root", "","mundo");
$estado = $_POST['estado'];
$ciudad = $_POST['ciudad'];


if(isset($estado) && !empty($estado)){
if(isset($ciudad) && !empty($ciudad)){
	$sql1 =mysqli_query($con,("INSERT INTO estados VALUES('$estado')"));
	$sql2 =mysqli_query($con,("INSERT INTO ciudad VALUES('$ciudad')"));
}}if($sql1 && $sql2){
              echo "<script> alert('Datos Ingresados correctamente a la base de datos') </script>"; 
        }else{
              echo "<script> alert('Datos no ingresados...') </script>";

    }

 ?>