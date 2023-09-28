<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "proyecto";

$conexion = new mysqli($server, $user, $password, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Insertar una venta
$sql_ventas = "INSERT INTO ventas (ID) VALUES (NULL)";
$conn->query($sql_ventas);

// Obtener el ID de la venta recién insertada
$Id_venta = $conn->insert_id;

// Insertar un detalle de venta asociado a la venta anterior
$sql_detalle_venta = "INSERT INTO detalla_venta (Id_venta) VALUES ($Id_venta)";
$conn->query($sql_detalla_venta);

$conn->close();
?>