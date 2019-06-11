<?php session_start();
$con = mysqli_connect("localhost", "root", "","mundo");
$ciudad = $_POST['ciudad'];


if(isset($ciudad) && !empty($ciudad)){
	$sql =mysqli_query($con,("INSERT INTO ciudad VALUES('$ciudad')"));
}if($sql){
              echo "<script> alert('Datos Ingresados correctamente a la base de datos') </script>"; 
        }else{
              echo "<script> alert('Datos no ingresados...') </script>";

    }

 ?>