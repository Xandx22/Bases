<?php
$conexion = mysqli_connect("localhost:3306", "root", "", "zoo_db");

if (!$conexion) {
    die("❌ Error en la conexión: " . mysqli_connect_error());
}

echo "✅ Conectado correctamente a la base de datos.";
?>
