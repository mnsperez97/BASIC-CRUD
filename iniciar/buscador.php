<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscador</title>
</head>
<body>
  <form action="buscadorA.php" method="POST">
    	<input type="text" name="busqueda" placeholder="Ingrese su busqueda">
    <select name="buscar">
    	<option value="continente">Continente</option>
    	<option value="pais">Pais</option>
    	<option value="estado">Estado</option>
    	<option value="ciudad">Ciudad</option>
    </select>
    <input type="submit" name="buscador" value="Buscar">
  </form>
</form>
</body>
</html>