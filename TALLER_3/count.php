<?php
// Ejemplo de uso de count()
$frutas = ["Manzana", "Naranja", "Plátano", "Uva", "Pera"];
$numFrutas = count($frutas);
echo "Array de frutas:";
print_r($frutas);
echo "<br>";
echo "Número de frutas: $numFrutas";
echo "<br>";
// Ejercicio: Crea un array con los nombres de tus 5 canciones favoritas
// y usa count() para mostrar cuántas canciones hay en tu lista
$misCanciones = ["Without You", "We found love", "Rosas", "I'm Blue", "Luanda"]; // Reemplaza esto con tu array de canciones
$numCanciones = count($misCanciones);
echo "Número de canciones en mi lista: $numCanciones";
echo "<br>";

// Bonus: Usa count() con un array multidimensional
$playlist = [
    "Rock" => ["Bohemian Rhapsody", "Stairway to Heaven"],
    "Pop" => ["Thriller", "Billie Jean", "Beat It"],
    "Jazz" => ["Take Five", "So What"]
];
$totalCanciones = 0;
foreach ($playlist as $genero => $canciones) {
    $numCancionesGenero = count($canciones);
    $totalCanciones += $numCancionesGenero;
    echo "Canciones de $genero: $numCancionesGenero ";
}
echo "<br>";
echo "Total de canciones en la playlist: $totalCanciones";
