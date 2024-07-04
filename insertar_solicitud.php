<?php


include 'crud.php';


$conexion = conectar();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST["nombre"];
    $solic  = $_POST["solic"];
    $area = $_POST["area"];
    $detalle = $_POST["detalle"];


    $solicitud = array(
        "idempl" => $nombre,
        "idtiposol" => $solic,
        "area" => $area,
        "detal_sol" => $detalle
    );
 
    insertarRegistro($conexion, "solicitudes_rrhh", $solicitud);

    header("Location: inicio.php");
    exit();
    
    desconectar($conexion);

    echo "Solicitud enviada exitosamente.";
} else {
    echo "Acceso no valido.";
}

?>
