<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loggin";

// Establecer la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si se ha establecido la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los valores ingresados en el formulario de inicio de sesión
$usuario = $_POST['email-log'];
$contrasena = $_POST['password-log'];

// Consulta SQL para verificar las credenciales del usuario
$sql = "SELECT * FROM loggin_sesion WHERE usuario = '$usuario' AND contraseña = '$contrasena'";
$resultado = $conn->query($sql);

// Verificar si se encontraron resultados y si el usuario es válido
if ($resultado->num_rows == 1) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION['usuario'] = $usuario;
    
    // Redireccionar a la página de inicio después de iniciar sesión
    header("Location: boton.html");
    exit();
} else {
    // Credenciales incorrectas
    echo "Nombre de usuario o contraseña incorrectos.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <button> <a href="aleronProduction.html">Regresar</a></button>

</body>
</html>