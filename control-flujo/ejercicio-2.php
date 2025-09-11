<?php

// 🔹 Ejercicio Desafiante
// Problema:
// 1. Crea un array con estos números:

$numeros = [5, 12, 8, 20, 33, 2, 17, 40];
/*
2. Recorre el array con foreach.
3. Para cada número:

--Si es mayor o igual a 20, imprímelo con el texto " → número grande".
--Si es menor a 10, imprímelo con el texto " → número pequeño".
--En cualquier otro caso, imprímelo con " → número mediano".

4. Extra: Al final, imprime cuántos números grandes, medianos y pequeños había en total (usa contadores).
*/


$pequenos = [];
$medianos = [];
$grandes = [];

foreach ($numeros as $num) {
    if ($num >= 20) {
        echo $num . " → número grande<br>";
        $grandes[] = $num;   // agrego al array de grandes
    } else if ($num < 10) {
        echo $num . " → número pequeño<br>";
        $pequenos[] = $num;  // agrego al array de pequeños
    } else {
        echo $num . " → número mediano<br>";
        $medianos[] = $num;  // agrego al array de medianos
    }
}

// Mostrar totales
echo "<br>Totales:<br>";
echo "Pequeños: " . count($pequenos) . "<br>";
echo "Medianos: " . count($medianos) . "<br>";
echo "Grandes: " . count($grandes) . "<br>";
