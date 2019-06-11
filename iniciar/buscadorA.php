<?php 
$con = mysqli_connect("localhost","root","","mundo");
$busqueda = $_POST['busqueda'];
$buscar = $_POST['buscar'];
switch ($buscar) {
      //Buscar Continente
      case 'continente':
           $sql = "SELECT continente FROM continentes WHERE continente = '$busqueda'";
            $query = mysqli_query($con,$sql);
            while ($result = mysqli_fetch_array($query)) {
                  echo $result['continente'];
            }
            break;
      //Buscar Pais
            case 'pais':
           $sql = "SELECT pais FROM paises WHERE pais = '$busqueda'";
            $query = mysqli_query($con,$sql);
            while ($result = mysqli_fetch_array($query)) {
                  echo $result['pais'];
            }
            break;
      //Buscar Estado
            case 'estado':
           $sql = "SELECT estado FROM estados WHERE estado = '$busqueda'";
            $query = mysqli_query($con,$sql);
            while ($result = mysqli_fetch_array($query)) {
                  echo $result['estado'];
            }
            break;
      //Buscar Ciudad
            case 'ciudad':
           $sql = "SELECT ciudad FROM ciudades WHERE ciudad = '$busqueda'";
            $query = mysqli_query($con,$sql);
            while ($result = mysqli_fetch_array($query)) {
                  echo $result['ciudad'];
            }
            break;

}

 ?>