<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $sexo = $_POST["sexo"];
    $domicilio = $_POST["domicilio"];
    $clave_lector = $_POST["clave_lector"];
    $curp = $_POST["curp"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $telefono = $_POST["telefono"];
    $ocupacion = $_POST["ocupacion"];
    $email = $_POST["email"];
    $estado_salud = $_POST["estado_salud"];

    
    $datos = "Nombre y Apellidos: $nombre\n";
    $datos .= "Sexo: $sexo\n";
    $datos .= "Domicilio: $domicilio\n";
    $datos .= "Clave de Lector: $clave_lector\n";
    $datos .= "CURP: $curp\n";
    $datos .= "Fecha de Nacimiento: $fecha_nacimiento\n";
    $datos .= "Teléfono: $telefono\n";
    $datos .= "Ocupación: $ocupacion\n";
    $datos .= "Correo Electrónico: $email\n";
    $datos .= "Estado de Salud: $estado_salud\n\n";


    $archivo = fopen("datos.txt", "a");
    fwrite($archivo, $datos);
    fclose($archivo);

    
    header("Location: mostrar_datos.php");
    exit();
} else {
    
    header("Location: index.html");
    exit();
}
?>
