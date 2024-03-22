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

// Validar que los campos obligatorios no estén vacíos
if (empty($_POST['producto']) || empty($_POST['codigo']) || empty($_POST['stock']) || empty($_POST['precio_compra']) || empty($_POST['precio_venta'])) {
    die('Todos los campos obligatorios deben ser completados');
}

$producto = $_POST['producto'];
$codigo = $_POST['codigo'];
$stock = $_POST['stock'];
$unidad_medida = $_POST['unidad_medida']; // Campo corregido
$observaciones = $_POST['observaciones'];
$precio_compra = $_POST['precio_compra']; // Campo corregido
$precio_venta = $_POST['precio_venta']; // Campo corregido
$imagen = $_POST['imagen'];


// Validar que los precios sean números
if (!is_numeric($precio_compra) || !is_numeric($precio_venta)) {
    die('Los precios deben ser valores numéricos');
}

$sqlinsert = "INSERT INTO inventario_varios (id_product, producto, codigo, stock, unidad_medida, observaciones, precio_compra, precio_venta, imagen)
              VALUES (NULL, '$producto', '$codigo', '$stock', '$unidad_medida', '$observaciones', '$precio_compra', '$precio_venta', '$imagen')";

if ($conn->query($sqlinsert) === True) {
    echo "Producto registrado exitosamente";
    header("Location: crud.php");
} else {
    echo "Error al registrar el producto: " . $conn->error;
}
$conn->close();
?>
