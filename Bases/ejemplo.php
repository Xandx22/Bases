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

$sql = "SELECT correo, contrasena FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";

echo "<h3>Consulta realizada:</h3>";
echo "<b>Consulta:</b> " . htmlspecialchars($sql) . "<br><br>";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<span style='color: green;'>Datos obtenidos:</span><br>";
    
    echo "<h4>Usuarios encontrados:</h4>";
    while($fila = $resultado->fetch_assoc()) {
        echo "• " . $fila['correo'] . " - " . $fila['contrasena'] . "<br>";
    }
    
} else {
    echo "Acceso denegado<br>";
    echo "<a href='javascript:history.back()'>Volver</a>";
}

$conexion->close();
?>