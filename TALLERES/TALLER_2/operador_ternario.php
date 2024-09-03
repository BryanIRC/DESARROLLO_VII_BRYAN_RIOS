
<?php
echo "<h2>Operador Ternario</h2>";

// Ejemplo básico
$edad = 34;
$mensaje = ($edad >= 18) ? "Eres mayor de edad" : "Eres menor de edad";
echo "Edad: $edad<br>";
echo "Mensaje: $mensaje<br><br>";

// Uso con diferentes tipos de datos
$nombre = "Juan";
$saludo = ($nombre !== "") ? "Hola, $nombre!" : "Hola, invitado!";
echo "Nombre: '$nombre'<br>";
echo "Saludo: $saludo<br><br>";

// Comparación con if-else tradicional
$puntuacion = 95;
if ($puntuacion >= 71) {
    $resultado = "Aprobado";
} else {
    $resultado = "Reprobado";
}
echo "Puntuación: $puntuacion<br>";
echo "Resultado (if-else): $resultado<br>";

// El mismo ejemplo con operador ternario
$resultadoTernario = ($puntuacion >= 71) ? "Aprobado" : "Reprobado";
echo "Resultado (ternario): $resultadoTernario<br><br>";

// Anidación de operadores ternarios (uso con precaución)
$nota = $puntuacion;
$calificacion = ($nota >= 91) ? "A" : (($nota >= 81) ? "B" : (($nota >= 71) ? "C" : (($nota >= 61) ? "D" : "F")));
echo "Nota: $nota<br>";
echo "Calificación: $calificacion<br><br>";

// Uso del operador ternario para asignar un valor predeterminado
$nombreUsuario = "";
$nombreMostrar = $nombreUsuario ?: "Invitado"; // Equivalente a: $nombreUsuario ? $nombreUsuario : "Invitado"
echo "Nombre de usuario: '$nombreUsuario'<br>";
echo "Nombre a mostrar: $nombreMostrar<br><br>";

// Uso del operador ternario en una expresión
$x = 5;
$y = 10;
echo "x = $x, y = $y<br>";
echo "El mayor valor es: " . (($x > $y) ? $x : $y) . "<br>";
?>