<?php

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

// Obtener datos
$username = $_POST['username'];
$password = $_POST['password']; 

// Consulta SQL para verificar el usuario y la contraseña
$sql = "SELECT id_usuario, id_rol, username, Correo, apellido, direccion FROM usuarios WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['id_rol'];
    session_start();
    
    // Verificar el rol del usuario
    if ($row['id_rol'] == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['id_rol'] = $row['id_rol'];
        $_SESSION['id_usuario'] = $row['id_usuario'];
        $_SESSION['correo'] = $row['Correo'];
        $_SESSION['apellido'] = $row['apellido'];
        $_SESSION['direccion'] = $row['direccion'];
        header('Location: ../dashboard.php');

    } else if ($row['id_rol'] == 2) {
        $_SESSION['username'] = $username;
        $_SESSION['id_rol'] = $row['id_rol'];
        $_SESSION['id_usuario'] = $row['id_usuario'];
        $_SESSION['correo'] = $row['Correo'];
        $_SESSION['apellido'] = $row['apellido'];
        $_SESSION['direccion'] = $row['direccion'];
       header('Location: ../index.html');

    } else {
        echo "No tienes permisos para acceder. <a href='../LogIn.html'>Intentar de nuevo</a>";
    }

} else {
    echo "Inicio de sesión fallido. <a href='../LogIn.html'>Intentar de nuevo</a>";
}

$conn->close();
?>
