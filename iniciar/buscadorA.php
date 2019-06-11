<link rel="stylesheet" href="../css/estilos.css">
<?php 
$con = mysqli_connect("localhost","root","","mundo");
error_reporting(0);
  if(!isset($buscar) && !isset($busqueda)){
    echo "<h2 class='titulo'>No se ha realizado ninguna busqueda</h2>";
  }
$buscar = $_POST['buscar'];
switch ($buscar) {
    //Buscar Continente
    case 'continente':
           $sql = "SELECT continente,id_continente FROM continentes";
            $query = mysqli_query($con,$sql);
            while ($result = mysqli_fetch_array($query)) {?>
            <center><table class="tab">
            <tr>
              <th><h2>ID Continente</h2></th>
              <th><h2>Continente</h2></th>
            </tr>
            <?php    
            echo "<tr>";
            echo "<td>".$result['id_continente']."</td>";
            echo "<td>".$result['continente']."</td>";
            echo "</tr>";
            }
        break;
      //Buscar Pais
      case 'pais':
           $sql = "SELECT pais,id_pais FROM paises ";
            $query = mysqli_query($con,$sql);
            while ($result = mysqli_fetch_array($query))  {?>
            <center><table class="tab">
            <tr>
              <th><h2>ID Pais</h2></th>
              <th><h2>Pais</h2></th>
            </tr>
            <?php    
            echo "<tr>";
            echo "<td>".$result['id_pais']."</td>";
            echo "<td>".$result['pais']."</td>";
            echo "</tr>";
            }
        break;
      //Buscar Estado
      case 'estado':
           $sql = "SELECT estado,id_estado FROM estados ";
            $query = mysqli_query($con,$sql);
            while ($result = mysqli_fetch_array($query)) { ?>
            <center><table class="tab">
            <tr>
              <th><h2>ID Estado</h2></th>
              <th><h2>Estado</h2></th>
            </tr>
            <?php    
            echo "<tr>";
            echo "<td>".$result['id_estado']."</td>";
            echo "<td>".$result['estado']."</td>";
            echo "</tr>";
            }
        break;
      //Buscar Ciudad
      case 'ciudad':
           $sql = "SELECT ciudad,id_ciudad FROM ciudades";
            $query = mysqli_query($con,$sql);
            while ($result = mysqli_fetch_array($query)) {?>
            <center><table class="tab">
            <tr>
              <th><h2>ID Ciudad</h2></th>
              <th><h2>Ciudad</h2></th>
            </tr>
            <?php    
            echo "<tr>";
            echo "<td>".$result['id_ciudad']."</td>";
            echo "<td>".$result['ciudad']."</td>";
            echo "</tr>";
            }
        break;


}

 ?>