<?php
// Ejemplo de uso de array_push()
$frutas = ["Manzana", "Naranja", "Plátano"];
echo "Array original de frutas:</br>";
print_r($frutas);
array_push($frutas, "Uva", "Pera");
echo "</br>Array de frutas después de array_push():</br>";
print_r($frutas);

// Ejercicio: Crea un array con los nombres de 3 de tus amigos
// y usa array_push() para añadir 2 amigos más
$misAmigos = []; // Reemplaza esto con tu array de amigos
array_push($misAmigos, "Day", "Zunny", "Sig", "Angel", "Edgar", "Aneth"); // Reemplaza las comillas vacías con los nombres de tus amigos
echo "</br>Mi lista de amigos:</br>";
print_r($misAmigos);
echo "<br>";

// Bonus: Usa array_push() con un array de arrays
$playlist = [
    ["Bohemian Rhapsody", "Queen"],
    ["Imagine", "John Lennon"]
];
array_push($playlist, ["Billie Jean", "Michael Jackson"], ["Like a Rolling Stone", "Bob Dylan"]);
echo "<br>Mi playlist v1.0:<br>";
foreach ($playlist as $cancion) {
    echo "- {$cancion[0]} por {$cancion[1]}</br>";
}
//Agrego 2 canciones mas al Playlist
array_push($playlist, ["Rosas", "La Oreja de Van Gogh"], ["We Found Love", "Rihanna"],);
echo "<br>Mi playlist v2.0:<br>";
foreach ($playlist as $cancion) {
    echo "- {$cancion[0]} por {$cancion[1]}</br>";
}