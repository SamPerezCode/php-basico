<?php

/*
🔹 Ejercicios de Control de Flujo en PHP
1. If / Else

Crea una variable $edad con tu edad.
Haz que el programa diga:
👉 "Eres mayor de edad" si es 18 o más.
👉 "Eres menor de edad" si es menor de 18.
*/

// $edad = 32;

// if ($edad >= 18) {
//     echo "Eres mayor de edad";
// } else {
//     echo "Eres meno de edad";
// }


/*
2. If / Elseif / Else

Crea una variable $nota y asigna un valor entre 0 y 100.
El programa debe mostrar:

--"Excelente" si la nota es 90 o más.
--"Aprobado" si la nota está entre 70 y 89.
--"Reprobado" si la nota es menor a 70.
*/

// $nota = 80;

// if ($nota >= 90) {
//     echo "Excelente";
// } else if ($nota >= 70) {
//     echo "Aprobado";
// } else {
//     echo "Reprobado";
// }

/*
3. Switch

Crea una variable $dia con un valor de día de la semana (ejemplo: "lunes").
El programa debe imprimir:

--"Inicio de semana" si es lunes.
--"Mitad de semana" si es miércoles.
--"Fin de semana" si es sábado o domingo.
--"Día normal" para los demás días.
*/

// $dia = "martes";

// switch ($dia) {
//     case 'lunes':
//         echo "Inicio de semana";
//         break;
//     case 'martes':
//         echo "Día normal";
//         break;
//     case 'miércoles':
//         echo "Mitad de semana";
//         break;
//     case 'jueves':
//         echo "Día normal";
//         break;
//     case 'viernes';
//         echo "Día normal";
//         break;
//     case 'sabado':
//         echo "Fin de semana";
//         break;
//     case 'domingo':
//         echo "Fin de semana";
//         break;

//     default:
//         echo "No es día valido";
//         break;
// }


/*
4. For

Imprime los números del 1 al 10 usando un for.

👉 Resultado esperado:
1 2 3 4 5 6 7 8 9 10
*/

// for ($i = 1; $i <= 10; $i++) {
//     echo $i;
// }

/*
5. While

Crea una variable $contador con valor 5.
Haz un while que cuente regresivamente hasta 1.

👉 Resultado esperado:
5 4 3 2 1
*/


// $contador = 5;

// while ($contador >= 1) {
//     echo $contador . " ";
//     $contador--;
// }



/*
6. Foreach

Crea un array con tus frutas favoritas:

*/
// $frutas = ["Manzana", "Banana", "Mango", "Uva"];

// Recórrelo con un foreach y muestra algo como:
// 👉 "Me gusta la Manzana", "Me gusta la Banana", etc.

// foreach ($frutas as $fruta) {
//     echo "Me gusta la $fruta <br>";
// }


// -------------------------------------------
// 🔹 Ejercicio Retador con while
// Problema:

// Crea un programa en PHP que:

// 1. Use una variable $numero con valor 10.
// 2. Mientras $numero sea mayor o igual a 1, el programa debe:

// --Imprimir el número.
// --Si el número es par, mostrar al lado " → es par".
// --Si es impar, mostrar " → es impar".
// --Luego decrementar el número.


// $numero = 10;

// while ($numero >= 1) {
//     if ($numero % 2 == 0) {
//         echo $numero . " → par <br>";
//     } else {
//         echo $numero . " → impar <br>";
//     }
//     $numero--;
// }

// -------------------------------------------------------

// 🔹 Ejercicio Avanzado: while + if + foreach
// Problema:

// 1. Crea un array de números del 1 al 20.
// 2. Recorre el array con un foreach.
// 3. Para cada número:

// --Si es par, guárdalo en un array llamado $pares.
// --Si es impar, guárdalo en un array llamado $impares.
// --Usa un while para imprimir el contenido de cada array.

$numeros = range(1, 20);

$pares = [];
$impares = [];

// Clasificar con el foreach
foreach ($numeros as $num) {
    if ($num % 2 == 0) {
        $pares[] = $num;
    } else {
        $impares[] = $num;
    }
}

echo "Números pares: <br>";

$i = 0;
while ($i < count($pares)) {
    echo $pares[$i] . " ";
    $i++;
}

echo "<br><br>Números impares:<br>";
$j = 0;

while ($j < count($impares)) {
    echo $impares[$j] . " ";
    $j++;
}
