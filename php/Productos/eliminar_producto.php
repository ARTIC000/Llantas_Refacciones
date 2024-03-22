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

$id_product = $_POST['id_product']; // Corregir aquí

$sqldelete = "DELETE FROM inventario_varios WHERE id_product = $id_product";

if ($conn->query($sqldelete) === True) {
    echo "Producto eliminado exitosamente";
} else {
    echo "Error al eliminar producto";
}
$conn->close();
?>
