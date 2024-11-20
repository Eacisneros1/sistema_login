<?php
$host = "localhost"; // Dirección del servidor (localhost para XAMPP)
$user = "root";      // Usuario de MySQL (por defecto en XAMPP es root)
$password = "";      // Contraseña (vacío por defecto en XAMPP)
$database = "sistema_login"; // Nombre de la base de datos

$conn = new mysqli($host, $user, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
