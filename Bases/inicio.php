<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #333;
            text-align: center;
            padding-top: 100px;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #0077cc;
            font-weight: bold;
        }
        a:hover {
            color: #005fa3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Bienvenido!</h1>
        <p>Has accedido correctamente al sistema.</p>
        <a href="logout.php">Cerrar sesión</a>
    </div>
</body>
</html>

