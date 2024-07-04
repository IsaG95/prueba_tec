<?php
include 'crud.php';


if (isset($_GET['idpersonas']) && is_numeric($_GET['idpersonas'])) {
    $clienteID = $_GET['idpersonas'];


    $conexion = conectar();
    $cliente = obtenerRegistroPorID($conexion, "personas", $clienteID);

 
    if ($cliente) {
      
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["actualizar"])) {
      
            $Nombre_completo = isset($_POST["Nombre_completo"]) ? $_POST["Nombre_completo"] : null;
            $pais = isset($_POST["pais"]) ? $_POST["pais"] : null;
            $departamento = isset($_POST["departamento"]) ? $_POST["departamento"] : null;
            $direccion = isset($_POST["direccion"]) ? $_POST["direccion"] : null;
            $fecha_nacimiento = isset($_POST["fecha_nacimiento"]) ? $_POST["fecha_nacimiento"] : null;

            
            actualizarRegistro($conexion, "personas", [
                'Nombre_completo' => $Nombre_completo,
                'pais' => $pais,
                'departamento' => $departamento,
                'direccion' => $direccion,
                'fecha_nacimiento' => $fecha_nacimiento
            ], "idpersonas = $clienteID");

            header("Location: vistaclientes.php");
            exit();
        }

         
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2 class="mt-4 mb-4">Actualizar Cliente</h2>

    <form action="" method="post">
       

        <div class="form-group">
            <label for="idpersonas">ID:</label>
            <input type="text" name="idpersonas" value="<?php echo $cliente['idpersonas']; ?>" class="form-control" required readonly>
        </div>

        <div class="form-group">
            <label for="Nombre_completo">Nombre:</label>
            <input type="text" name="Nombre_completo" value="<?php echo $cliente['Nombre_completo']; ?>" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="pais">País:</label>
            <input type="text" name="pais" value="<?php echo $cliente['pais']; ?>" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="departamento">Departamento:</label>
            <input type="text" name="departamento" value="<?php echo $cliente['departamento']; ?>" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" value="<?php echo $cliente['direccion']; ?>" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" value="<?php echo $cliente['fecha_nacimiento']; ?>" class="form-control" required>
        </div>

        <button type="submit" name="actualizar" class="btn btn-success">Actualizar</button>
        
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php

    } else {
        echo "Cliente no encontrado.";
    }

    desconectar($conexion);
} else {
    echo "ID de cliente no válido.";
}
?>
