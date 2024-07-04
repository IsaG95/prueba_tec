<?php


include 'conexion.php';




if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["nombre"];
    $password = $_POST["pass"];

    $conexion = conectar();

   
    $sql = "SELECT * FROM usuarios WHERE nombre = '$username' AND pass = '$password'";
    $result = ejecutarConsulta($conexion, $sql);
    

    // Verifica si se encuentra el usuario
    if ($result->num_rows > 0) {
        
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['nombre'] = $username;
        header("Location: inicio.php"); 
        exit();
    } else {
        
        echo "Nombre de usuario o contraseña incorrectos.";
    }

    desconectar($conexion);
}
?>
