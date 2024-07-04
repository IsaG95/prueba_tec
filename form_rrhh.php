<?php

session_start();

include 'conexion.php';


$conexion = conectar();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Personas</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="estilo/formulario_estilos.css">
    
</head>
<body>

    <div class="container mt-4">
        <h2 class="mb-4">Solicitud RRHH</h2>
    
        <form action="insertar_solicitud.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <select class="form-control" name="nombre" id="nombre">
                    <option value=""></option>
                    <option value="2">Brayan Ruiz</option>
                    <option value="3">Isai Ruiz</option>
                    <option value="4">Carlos lopez</option>
                    <option value="5">Daniela Barrios</option>
                    <option value="11">Daniel Suarez</option>
                </select>
                    
            </div>

            <div class="form-group">
                <label for="solic">tipo de solicitud:</label>
                <select class="form-control" name="solic" id="solic">
                    <option value=""></option>
                    <option value="1">Vacaciones</option>
                    <option value="2">Horas Extras</option>
                    <option value="3">Baja</option>
                    <option value="4">Alta</option>

                </select>
                    
            </div>

            <div class="form-group">
                <label for="area">Area:</label>
                <input type="text" class="form-control" name="area" required>
            </div>
    
    
            <div class="form-group">
                <label for="detalle">Detalle de solicitud:</label>
                <textarea type="text" class="form-control" name="detalle" rows="4" required></textarea>
            </div>
    
            <button type="submit" class="btn btn-primary">Insertar</button>
        </form>
    </div>

    

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    


</body>
</html>

<?php

desconectar($conexion);
?>