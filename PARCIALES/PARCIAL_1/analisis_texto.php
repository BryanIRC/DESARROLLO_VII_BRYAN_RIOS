<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>PARCIAL 1</title>
</head>

<body>
    <?php
    include "utilidades_texto.php";
    $frases = ["Created to create", "Si hay que arrojar la toalla que sea en la playa", "Draco dormiens nunquam titilandus"];
    foreach ($frases as $frase) {

        echo "<table>";
        echo "<tr><td>Frase: </td><td>$frase</td></tr>";
        echo "<tr><td>Numero de palabras </td><td>" . contar_palabras($frase) . "</td></tr>";
        echo "<tr><td>La frase invertida </td><td>" . invertir_palabras($frase) . "</td></tr>";
        echo "<tr><td>Numero de vocales </td><td>" . contar_vocales($frase) . "</td></tr>";
        echo "</table><br>";
    ?>
    <?php
    }
    ?>
</body>

</html>