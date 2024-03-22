<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Datos Guardados</title>
</head>
<body>

<h2>Datos Guardados</h2>

<?php

$datos_guardados = file_get_contents("datos.txt");


echo "<pre>$datos_guardados</pre>";


echo '<p><a href="descargar_datos.php">Descargar datos</a></p>';


echo '
<form action="borrar_datos.php" method="post">
  <input type="submit" value="Borrar datos">
</form>
';
?>

<a href="index.html">Regresar al formulario</a>

</body>
</html>