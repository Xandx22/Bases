<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$db   = "zoo_db";

$con = new mysqli($host, $user, $pass, $db);

if ($con->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$correo     = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT correo, contrasena FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";

$resultado = $con->query($sql);

echo "<h3>ERROR:</h3>";
echo "<b>Consulta SQL ejecutada:</b> " . htmlspecialchars($sql) . "<br><br>";



if ($resultado->num_rows >0) {
 
    header("Location: inicio.php");
    exit(); 
} else {
    echo "<span style='color: red;'>Login fallido</span><br>";
    echo "<a href='javascript:history.back()'>Volver al login</a>";
}

$con->close();
?>