<?php

/*
🔹 Control de flujo en PHP
El control de flujo permite que un programa tome decisiones (condicionales) o repita acciones (bucles).

// ---------------------------------------------

✅ 1. Condicionales
🔸 if / else

Ejecutan bloques de código dependiendo si una condición es verdadera o falsa.
*/

// $edad = 18;

// if ($edad >= 18) {
//     echo "Eres mayor de edad.";
// } else {
//     echo "Eres menor de edad.";
// }

// ---------------------------------------------
// 🔸 if / elseif / else

// Permite evaluar múltiples condiciones.

// $nota = 75;

// if ($nota >= 90) {
//     echo "Excelente";
// } elseif ($nota >= 70) {
//     echo "Aprobado";
// } else {
//     echo "Reprobado";
// }

// ----------------------------------------------

// 🔸 switch

// Se usa cuando tienes muchas opciones posibles para una misma variable.

// $dia = "martes";

// switch ($dia) {
//     case 'lunes':
//         echo "Inicio de semana";
//         break;
//     case 'martes':
//         echo "Segundo día de la semana";
//         break;
//     case 'viernes':
//         echo "¡Por fín viernesss!";
//         break;

//     default:
//         echo "Día normal";
//         break;
// }


// ------------------------------------------------------------------------------------------------
// ✅ 2. Bucles
// 🔸 for
// Se usa cuando sabemos cuántas veces vamos a repetir algo.
// for ($i = 1; $i <= 5; $i++) {
//     echo "Número: $i <br>";
// }


// 🔸 while
// Se ejecuta mientras la condición sea verdadera.

// $contador = 1;

// while ($contador <= 5) {
//     echo "Contando: $contador <br>";
//     $contador++;
// }

// 🔸 foreach
// Especial para recorrer arrays.

$frutas = ["Manzana", "Banana", "Naranja"];

foreach ($frutas as $fruta) {
    echo "Me gusta la $fruta <br>";
}
