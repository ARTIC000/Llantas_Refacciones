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

$medida = $_POST['medida'];
$marca = $_POST['marca'];
$gama = $_POST['gama'];
$descripcion = $_POST['descripcion'];
$ic_rv = $_POST['ic_rv'];
$vehiculos = $_POST['vehiculos'];
$precio_list = $_POST['precio_list'];
$stock = $_POST['stock'];

$sqlinsert = "INSERT INTO
    inventario_llantas(id_llanta, medida, marca, gama, descripcion, ic_rv, vehiculos, precio_list, stock)
    VALUES (null,'$medida', '$marca', '$gama', '$descripcion', '$ic_rv', '$vehiculos', '$precio_list', '$stock')";

if ($conn->query($sqlinsert) === true) {
    echo "Registro exitoso";
    header("Location: ../dashboard.php");
} else {
    echo "Error al registrar al usuario: " . $conn->error;
}

$conn->close();
?>
 