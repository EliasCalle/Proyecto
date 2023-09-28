<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "proyecto";

// Crear conexión
$conexion = new mysqli($server, $user, $password, $db);

// Verificar conexión
if ($conexion->connect_errno) {
  die("Conexión fallida: " . $conn->connect_errno);
}

echo "Conexión exitosa";
?>