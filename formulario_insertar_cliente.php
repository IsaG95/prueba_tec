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
        <h2 class="mb-4">Formulario Personas</h2>
    
        <form action="insertar_cliente.php" method="post">
            <div class="form-group">
                <label for="Nombre_completo">Nombre:</label>
                <input type="text" class="form-control" name="Nombre_completo" required>
            </div>

            <div class="form-group">
                <label for="pais">Pais:</label>
                <select class="form-control" name="pais" id="pais">
                    <option value=""></option>
                    <option value="1">Guatemala</option>
                    <option value="2">El salvador</option>
                    <option value="3">Honduras</option>
                    <option value="4">Nicaragua</option>
                    <option value="5">Costa Rica</option>
                </select>
                    
            </div>
    
            <div class="form-group">
                <label for="departamento">Departamento:</label>
                <select class="form-control" name="departamento" id="departamento">
                    <option value=""></option>
                    <option value="1">Guatemala</option>
                    <option value="2">Escuintla</option>
                    <option value="3">Santa Rosa</option>
                    <option value="4">Quetzaltenango</option>
                    <option value="5">Mazatenango</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="direccion">Direccion:</label>
                <input type="text" class="form-control" name="direccion" required>
            </div>
    
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" name="fecha_nacimiento" required>
            </div>
    
            <button type="submit" class="btn btn-primary">Insertar Cliente</button>
        </form>
    </div>

    

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    


</body>
</html>
