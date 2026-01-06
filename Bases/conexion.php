<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$db   = "zoo_db";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
