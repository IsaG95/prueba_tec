<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de Recursos humanos</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php

session_start();

include 'crud.php';


$conexion = conectar();


$clientes = obtenerRegistros2($conexion, "solicitudes_rrhh");


?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="">Bienvenido, <?php echo $_SESSION['nombre']; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/prueba_tec/inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/prueba_tec/form_rrhh.php">Ingresar Solicitudes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/prueba_tec/vistasolicitudes.php">Solicitudes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/prueba_tec/vistaclientes.php">Personas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/prueba_tec/formulario_insertar_cliente.php">Formulario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Cerrar sesión</a>
                </li>
            </ul>
        </div>
</nav>

<div class="container mt-4">
    <div class="table-responsive">
        <table  id="tablaClientes" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Empleado</th>
                    <th>Tipo de solicitud</th>
                    <th>Detalle</th>
                    <th>area</th>
                    <th>Fecha de creacion</th>

                </tr>
            </thead>
            <tbody>
            <?php foreach ($clientes as $index => $cliente): ?>
                <tr>
                    <td><?php echo $cliente['id']; ?></td>
                    <td><?php echo $cliente['nombre']; ?></td>
                    <td><?php echo $cliente['solicitud']; ?></td>
                    <td><?php echo $cliente['detalle']; ?></td>
                    <td><?php echo $cliente['area']; ?></td>
                    <td><?php echo $cliente['fecha']; ?></td>
                  
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div> 
        
</div>




<?php

desconectar($conexion);
?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
       
        $('#tablaClientes').DataTable();
    });

</script>




</body>
</html>
