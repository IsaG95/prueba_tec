<?php


include 'crud.php';


$conexion = conectar();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $Nombre_completo = $_POST["Nombre_completo"];
    $pais  = $_POST["pais"];
    $departamento = $_POST["departamento"];
    $direccion = $_POST["direccion"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];

    $nuevoCliente = array(
        "Nombre_completo" => $Nombre_completo,
        "pais" => $pais,
        "departamento" => $departamento,
        "direccion" => $direccion,
        "fecha_nacimiento" => $fecha_nacimiento
    );
 
    insertarRegistro($conexion, "personas", $nuevoCliente);

    header("Location: vistaclientes.php");
    exit();
    
    desconectar($conexion);

    echo "Cliente insertado exitosamente.";
} else {
    echo "Acceso no válido.";
}

?>
