<?php

include 'conexion.php';


function obtenerRegistros($conexion, $tabla) {
    $sql = "SELECT * FROM $tabla";
    $result = ejecutarConsulta($conexion, $sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function obtenerRegistros2($conexion, $tabla) {
    $sql = "SELECT a.idsol as id, b.Nombre_completo as nombre,
    c.tipo_solicitud AS solicitud,a.detal_sol as detalle,
    a.area as area, a.fecha_c as fecha 
    FROM $tabla a
    INNER JOIN personas b ON (a.idempl = b.idpersonas) 
    INNER JOIN tipo_solicitud c ON (a.idtiposol = c.id_tsolicitud);";
    $result = ejecutarConsulta($conexion, $sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function obtenerRegistroPorID($conexion, $tabla, $id) {
    $sql = "SELECT * FROM $tabla WHERE idpersonas = $id";
    $result = ejecutarConsulta($conexion, $sql);
    return $result->fetch_assoc(); 
}


function insertarRegistro($conexion, $tabla, $datos) {
    $columnas = implode(',', array_keys($datos));
    $valores = "'" . implode("','", $datos) . "'";
    $sql = "INSERT INTO $tabla ($columnas) VALUES ($valores)";
    return ejecutarConsulta($conexion, $sql);
}

function actualizarRegistro($conexion, $tabla, $datos, $condicion) {
    $actualizaciones = "";
    foreach ($datos as $columna => $valor) {
        $actualizaciones .= "$columna = '$valor',";
    }
    $actualizaciones = rtrim($actualizaciones, ",");
    $sql = "UPDATE $tabla SET $actualizaciones WHERE $condicion";
    return ejecutarConsulta($conexion, $sql);
}

function eliminarRegistro($conexion, $tabla, $condicion) {
    $sql = "DELETE FROM $tabla WHERE $condicion";
    return ejecutarConsulta($conexion, $sql);
}


$conexion = conectar();



desconectar($conexion);

?>
