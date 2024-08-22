<?php
echo "<h3>Patrón de triángulo</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo str_repeat('*', $i) . "<br>";
}
echo "<h3>Secuencia de números impares</h3>";
$impar = 1;
while ($impar <= 20) {
    if ($impar % 2 != 0)
        echo "$impar ";
    $impar++;
}

echo "<h3>Cuenta regresiva, excepto 5</h3>";
$n = 10;
do {
    if ($n != 5)
        echo "$n ";
    $n--;
} while ($n > 0);
