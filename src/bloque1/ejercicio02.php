<?php

// Escribe un script PHP que genere un número aleatorio entre 1 y 10, simulando una nota numérica y muestre un mensaje indicando la calificación obtenida teniendo en cuenta los siguientes rangos:

$nota = rand(0, 10);


echo "<h1>Nota obtenida: $nota</h1>";

if ($nota >= 1 && $nota <= 4) {
    echo "<h1>Calificación: Insuficiente</h1>";
} elseif ($nota == 5) {
    echo "<h1>Calificación: Suficiente</h1>";
} elseif ($nota == 6) {
    echo "<h1>Calificación: Bien</h1>";
} elseif ($nota >= 7 && $nota <= 8) {
    echo "<h1>Calificación: Notable</h1>";
} elseif ($nota >= 9 && $nota <= 10) {
    echo "<h1>Calificación: Sobresaliente</h1>";
} else {
    echo "<h1>Nota inválida</h1>";
}



?>
