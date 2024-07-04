<?php
include 'crud.php';


if (isset($_GET['idpersonas']) && is_numeric($_GET['idpersonas'])) {
    $clienteID = $_GET['idpersonas'];


    $conexion = conectar();

  
    $cliente = obtenerRegistroPorID($conexion, "personas", $clienteID);
    if ($cliente) {
        
        eliminarRegistro($conexion, "personas", "idpersonas = $clienteID");
        echo "Cliente eliminado correctamente.";
    } else {
        echo "Cliente no encontrado.";
    }

    
    desconectar($conexion);
} else {
    echo "ID de cliente no válido.";     
}


header("refresh:2;url=vistaclientes.php");
?>

