<?php
$nombre_completo = "Bryan Rios";
$edad = 34;
$correo = "brios.16@gmail.com";
$telefono = "6060-0000";
define("OCUPACION", "Ingeniero");
echo "Hola, me llamo " . $nombre_completo . ", tengo " . $edad . " años y soy " . OCUPACION .
    "<br>Para contacto<br>Correo: " . $correo . "<br>Telefono: " . $telefono . "<br>";
print("<br>Hola, me llamo $nombre_completo, tengo $edad años y soy " . OCUPACION .
    "<br>Para contacto<br>Correo: $correo<br>Telefono: $telefono<br>");
printf(
    "<br>Hola, me llamo %s, tengo %d años y soy %s<br>Para contacto<br>Correo: %s<br>Telefono: %s<br>",
    $nombre_completo,
    $edad,
    OCUPACION,
    $correo,
    $telefono
);
echo "<br>";
var_dump($nombre_completo);
echo "<br>";
var_dump($edad);
echo "<br>";
var_dump($correo);
echo "<br>";
var_dump($telefono);
echo "<br>";
var_dump(OCUPACION);
