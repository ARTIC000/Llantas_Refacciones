<?php
session_start();

// Declaracion de variables
$servername = 'localhost';
$user = 'root';
$pass = '';
$database = 'borrame';

// Ingreso a la base de datos
$conn = new mysqli($servername, $user, $pass, $database);
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

$sql = "SELECT * FROM inventario_varios";
$result = $conn->query($sql);

$productos = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Escapa la ruta de la imagen
        $row['imagen'] = htmlspecialchars($row['imagen'], ENT_QUOTES, 'UTF-8');
        $productos[] = $row;
    }
}

$conn->close();
?>
