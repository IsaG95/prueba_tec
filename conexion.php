<?php

function conectar() {
    $host = "localhost"; 
    $usuario = "root"; 
    $contraseña = ""; 
    $base_de_datos = "prueba_tecandroid"; 

    $conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    return $conexion;
}


function desconectar($conexion) {
    $conexion->close();
}


function ejecutarConsulta($conexion, $sql) {
    $resultado = $conexion->query($sql);
    
    if (!$resultado) {
        die("Error en la consulta: " . $conexion->error);
    }

    return $resultado;
}

?>
