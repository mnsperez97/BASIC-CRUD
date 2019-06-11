<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilos.css">
	<title>Buscador</title>
</head>
<body>
<div class="contenedor">
    <form action="buscadorA.php" method="POST" target="ifpersonal" class="formulario">
      <select name="buscar" class="sl">
          <option value="continente">Continente</option>
          <option value="pais">Pais</option>
          <option value="estado">Estado</option>
          <option value="ciudad">Ciudad</option>
      </select>
          <input type="submit" name="buscador" value="Buscar" class="submit_btn">
    </form>
    
    <center><iframe src="buscadorA.php" name="ifpersonal" width="600" height="400" scrolling="auto">
    
    Texto alternativo para navegadores que no aceptan iframes
    
    </iframe>
    </center>
    </form>
</div>
</body>
</html>