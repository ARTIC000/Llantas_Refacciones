<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="php/guardar_datos.php" method='post'>
        <label>Medida</label>
        <input type="text" id="medida" name="medida" required><br>
        <label>Marca</label>
        <input type="text" id="marca" name="marca" required><br>
        <label>gama</label>
        <input type="text" id="gama" name="gama" required><br>
        <label>descripcion</label>   
        <input type="text" id="descripcion" name="descripcion" required><br>
        <label>ic/rv</label>
        <input type="text" id="ic_rv" name="ic_rv" required><br>
        <label>vehiculos</label>
        <input type="text" id="vehiculos" name="vehiculos" required><br>
        <label> precio_list</label>
        <input type="text" id="precio_list" name="precio_list" required><br>
        <label> stock</label>
        <input type="text" id="stock" name="stock" required><br>
        <button type="submit" name="action" value='agregar'>registrar</button>
    </form>
</body>
</html>