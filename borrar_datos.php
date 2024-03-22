<?php

$archivo_datos = 'datos.txt';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (file_exists($archivo_datos)) {
     
        file_put_contents($archivo_datos, '');
        
        header("Location: mostrar_datos.php?mensaje=Datos borrados exitosamente");
        exit;
    } else {
        
        header("Location: mostrar_datos.php?error=Archivo no encontrado");
        exit;
    }
} else {
    
    header("Location: mostrar_datos.php?error=Solicitud no válida");
    exit;
}
?>
