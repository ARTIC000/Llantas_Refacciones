<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Regristo de usuario</h2>
    <form action="guardar_datos.php" method='post'>
        <label>Nombre de usuario</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario" required><br>
        <label>Nombre</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label>apellido</label>
        <input type="text" id="apellido" name="apellido" required><br>
        <label>correo</label>   
        <input type="text" id="correo" name="correo" required><br>
        <label>contraseña</label>
        <input type="text" id="contraseña" name="contraseña" required><br>
        <label>direccion</label>
        <input type="text" id="direccion" name="direccion" required><br>
        <button type="submit" name="action" value='agregar'>registrar</button>
    </form>
</body>
</html>