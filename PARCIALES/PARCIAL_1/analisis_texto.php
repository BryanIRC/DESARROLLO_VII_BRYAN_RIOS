<?php
include "utilidades_texto.php";

$frases = ["Created to create", "Si hay que arrojar la toalla que sea en la playa", "Draco dormiens nunquam titilandus"];
foreach ($frases as $frase) {
    echo "Frase: $frase<br>";
    echo "Contiene " . contar_palabras($frase) . " palabras<br>";
    echo "La frase invertida es: " . invertir_palabras($frase) . "<br><br>";
}
