<?php

$archivo_descargar = 'datos.txt';


if (file_exists($archivo_descargar)) {
    
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($archivo_descargar) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($archivo_descargar));
    
    readfile($archivo_descargar);
    exit;
} else {
    
    header("Location: mostrar_datos.php?error=Archivo no encontrado");
    exit;
}
?>
