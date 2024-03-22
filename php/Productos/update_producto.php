<?php
session_start();

$servername = 'localhost';
$user = 'root';
$pass = '';
$database = 'borrame';

$conn = new mysqli($servername, $user, $pass, $database);
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

$id_product = $_POST['id_product'];
$producto = $_POST['producto'];
$codigo = $_POST['codigo'];
$stock = $_POST['stock'];
$unidad_medida = $_POST['unidad_medida'];
$observaciones = $_POST['observaciones'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$imagen = $_POST['imagen'];

$sqlupdate = "UPDATE inventario_varios SET
                producto = '$producto',
                codigo = '$codigo',
                stock = '$stock',
                unidad_medida = '$unidad_medida',
                observaciones = '$observaciones',
                precio_compra = '$precio_compra',
                precio_venta = '$precio_venta',
                imagen = '$imagen'
                WHERE id_product = $id_product";

if ($conn->query($sqlupdate) === TRUE) {
    echo "Producto actualizado correctamente";
} else {
    echo "Error al actualizar el producto: " . $conn->error; 
}

$conn->close();
?>
