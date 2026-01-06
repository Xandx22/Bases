<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$db   = "zoo_db";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$correo     = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// CONSULTA VULNERABLE
$sql = "SELECT correo, contrasena FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";

echo "<h3>ERROR:</h3>";
echo "<b>Consulta SQL ejecutada:</b> " . htmlspecialchars($sql) . "<br><br>";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<span style='color: green; font-weight: bold;'>LOGIN EXITOSO - Redirigiendo...</span><br>";
    
    // Redirigir a otra página
    header("Location: inicio.php");
    exit(); // Importante: salir después de header
} else {
    echo "<span style='color: red;'>Login fallido</span><br>";
    echo "<a href='javascript:history.back()'>Volver al login</a>";
}

$conexion->close();
?>