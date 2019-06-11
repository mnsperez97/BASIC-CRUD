<?php session_start();
$con = mysqli_connect("localhost", "root", "","mundo");
$continente = $_POST['continente'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$ciudad = $_POST['ciudad'];


if(isset($continente) && !empty($continente)){
if(isset($pais) && !empty($pais)){
if(isset($estado) && !empty($estado)){
if(isset($ciudad) && !empty($ciudad)){
	$sql =mysqli_query($con,("INSERT INTO continentes(continente) VALUES('$continente')"));
	$sql1 =mysqli_query($con,("INSERT INTO pais VALUES('$pais')"));
	$sql2 =mysqli_query($con,("INSERT INTO estados VALUES('$estado')"));
	$sql3 =mysqli_query($con,("INSERT INTO ciudad VALUES('$ciudad')"));
}}}}if($sql){
              echo "<script> alert('Datos Ingresados correctamente a la base de datos') </script>"; 
        }else{
              echo "<script> alert('Datos no ingresados...') </script>";

    }

 ?>