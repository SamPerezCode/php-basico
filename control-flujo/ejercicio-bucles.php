<?php
/*
🔹 Ejercicio con Bucles Anidados
Problema:

1. Crea un array multidimensional llamado $estudiantes con esta estructura:
*/
$estudiantes = [
    ["nombre" => "Ana", "notas" => [85, 92, 78]],
    ["nombre" => "Luis", "notas" => [45, 60, 55]],
    ["nombre" => "María", "notas" => [95, 88, 91]],
    ["nombre" => "Pedro", "notas" => [70, 65, 80]]
];
/*
2. Recorre el array principal con un foreach.

3. Para cada estudiante, recorre sus notas con un segundo bucle (foreach o for) y calcula el promedio.

Según el promedio:

--Si es 70 o más, imprimir: "Ana → Aprobado (Promedio: 85)".
--Si es menor a 70, imprimir: "Luis → Reprobado (Promedio: 53.3)".
*/

foreach ($estudiantes as $est) {

    $promedio = array_sum($est["notas"]) / count($est["notas"]);
    if ($promedio >= 70) {
        echo $est["nombre"] . " → Aprobado (Promedio: " . round($promedio, 1) . ")<br>";
    } else {
        echo $est["nombre"] . " → Reprobado (Promedio: " . round($promedio, 1) . ")<br>";
    }
}
