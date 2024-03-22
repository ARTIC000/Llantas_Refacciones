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

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id_product']}</td>
                <td>{$row['producto']}</td>
                <td>{$row['codigo']}</td>
                <td>{$row['stock']}</td>
                <td>{$row['unidad_medida']}</td>
                <td>{$row['observaciones']}</td>
                <td>{$row['precio_compra']}</td>
                <td>{$row['precio_venta']}</td>
                <td>{$row['imagen']}</td>
                <td>
                    <button onclick=\"mostrarEditarProducto('{$row['id_product']}', '{$row['producto']}', '{$row['codigo']}', '{$row['stock']}', '{$row['unidad_medida']}', '{$row['observaciones']}', '{$row['precio_compra']}', '{$row['precio_venta']}', '{$row['imagen']}')\">Editar</button>
                    <button onclick=\"mostrarEliminarProducto('{$row['id_product']}')\">Eliminar</button>
                </td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='7'>No hay usuarios</td></tr>";
}

$conn->close();
?>
