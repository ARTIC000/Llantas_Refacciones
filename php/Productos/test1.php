<?php 
$nombre = 'Angel';
$apellido = 'Contreras';
$email = 'angelglez@gmail.com';
$celular = 6183105006;
$punto = 10.5;
$naci = 2004;
$actualidad = 2024;
$edad = $actualidad - $naci;
$arrayname = array('Hunger Games', 'Baby Driver'); 

//IF SECTION
if ($edad ==18){
    echo "<h1>Si puede tomar caguamas</h1>";
}
else{
    echo "<h1>No se puede rey</h1>";
}

if ($nombre == 'Carlos'){
    echo "Que haces aqui Carlos";
}
elseif ($nombre == 'Angel') {
    echo "<h1>Holi angel</h1>";
}
else {
    echo '<h1>Quien eres wtf</h1>';
}

foreach ($arrayname as $array2) {
    echo "$array2 <br>";
}

//Echo SECTION
echo "<br>Hola mundo
<h1>$edad</h1>
<h1>$nombre $apellido</h1>
<h1>$arrayname[0]</h1> 
<h1>$arrayname[1]</h1>
";

//Conexiones con php
Session_star();
    mysql();
        $_POST[];//ayuda a mandar informacion encapsulada
        $_SESSION[];//Arreglo de una posicion directamente de la posicion
close();
?>



