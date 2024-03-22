<?php
session_start();
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    $email=$_SESSION['correo'];
    $apellido=$_SESSION['apellido'];
    $direccion=$_SESSION['direccion'];

    echo "<h1> Bienvenido, $username $apellido</h1>";
    echo "<p>Tu correo es <i>$email<i></p>";
    echo "<p> Desea que se le envie su paquete hacia la direccion <i>$direccion</i>?";
    echo "<br><a href='logout.php'>Cerrar Sesión</a>";
}
else {
    header("Location: index.html");
    exit();
}
?>