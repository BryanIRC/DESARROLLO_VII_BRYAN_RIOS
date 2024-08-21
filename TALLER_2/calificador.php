<?php
$calificacion = 97;
$nota = "";
if ($calificacion > 100 || $calificacion < 0) {
    $nota = "Calificación no válida";
} elseif ($calificacion >= 90) {
    $nota = "A";
} elseif ($calificacion >= 80) {
    $nota = "B";
} elseif ($calificacion >= 70) {
    $nota = "C";
} elseif ($calificacion >= 60) {
    $nota = "D";
} else {
    $nota = "F";
}
echo "Tu calificación es: $nota<br>";
$resultado = ($nota == "F") ? "Reprobado<br>" : (($nota == "Calificación no válida") ? "La calificación debe estar entre 0 y 100" : "Aprobado<br>");
echo "$resultado";
switch ($nota) {
    case "A":
        echo "Excelente trabajo";
        break;
    case "B":
        echo "Buen trabajo";
        break;
    case "C":
        echo "Trabajo aceptable";
        break;
    case "D":
        echo "Necesitas mejorar";
        break;
    case "F":
        echo "Debes esforzarte más";
        break;
}
