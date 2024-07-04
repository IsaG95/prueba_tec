<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    
 
    <link rel="stylesheet" href="estilo/index.css">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center login-container">
            <div class="col-md-6 col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Inicio de sesion</h2>
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="nombre">Usuario:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>

                            <div class="form-group">
                                <label for="pass">Contraseña:</label>
                                <input type="pass" class="form-control" id="pass" name="pass" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Iniciar sesion</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

