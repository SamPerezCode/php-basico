<?php

// 🔹 Ejercicios de Arrays
// 1. Array indexado

// Crea un array $frutas = ["Manzana", "Banana", "Mango"];

// Agrega "Uva" al final con array_push.

// Elimina el último elemento con array_pop.

// Muestra cuántas frutas quedaron con count.

// 👉 Resultado esperado:

// ["Manzana", "Banana", "Mango"]
// Cantidad: 3


$frutas = ["Manzana", "Banana", "Mango"];

array_push($frutas, "Uva");

echo $frutas[3];

array_pop($frutas);

echo count($frutas) . "<br>";

// -----------------------------------------------

// 2. Array asociativo

// Crea un array con tus datos personales:

$persona = [
    "nombre" => "Samyr",
    "edad" => 32,
    "ciudad" => "Valledupar"
];

echo " Soy " . $persona["nombre"] . " tengo " . $persona["edad"] . " años de edad y vivo en " . $persona["ciudad"] . "<br>";

// -----------------------------------------------
// 3. Ordenar un array

// Crea un array $numeros = [4, 2, 8, 1, 9];

// Ordénalo de menor a mayor con sort.

// Ordénalo de mayor a menor con rsort.

// 👉 Resultado esperado:

$numeros = [4, 2, 8, 1, 9];

sort($numeros);

echo " Ascendentes: ";
foreach ($numeros as $num) {
    echo $num . " ";
}
rsort($numeros);
echo "<br> Descendentes: ";
foreach ($numeros as $num) {
    echo $num . " ";
}


// ----------------------------------------
// 🔹 Ejercicios de Strings
// 4. Longitud y mayúsculas/minúsculas

// Crea una variable $texto = "Aprendiendo PHP es divertido";

// --Muestra la cantidad de caracteres con strlen.
// --Convierte todo a mayúsculas con strtoupper.
// --Convierte todo a minúsculas con strtolower.

$texto = "Aprendiendo PHP es divertido";

echo "<br>" . strlen($texto) . "<br>";

echo strtoupper($texto) . "<br>";
echo strtolower($texto) . "<br>";

// -----------------------------------------
// 5. Substrings

// Crea una variable $mensaje = "Programar en PHP";

// Muestra solo la palabra "Programar" con substr.

// Muestra solo "PHP".


$mensaje = "Programar en PHP";

echo substr($mensaje, 0, 9) . "<br>";
echo substr($mensaje, 13, 15);

// -------------------------------------------
// 6. Reemplazo y búsqueda

// Crea una variable $frase = "Me gusta el café";

// --Reemplaza "café" por "té" usando str_replace.
// --Encuentra la posición donde empieza la palabra "gusta" con strpos.

$frase = "Me gusta el café";
echo "<br>" . str_replace("café", "té", $frase) . "<br>";

echo "<br>" . strpos($frase,  "gusta") . "<br>";

// --------------------------------------------------

// 7. Explode & Implode

// Crea una variable $cadena = "rojo,verde,azul";

// --Convierte la cadena en un array con explode.
// --Recorre el array con foreach y muestra cada color.
// --Luego vuelve a unirlos en un string separado por - con implode.

$cadena = "rojo,verde,azul";

$colores = explode(" ,", $cadena);

foreach ($colores as $c) {
    echo $c . "<br>";
}

$nuevaCadena = implode("-", $colores);
echo $nuevaCadena;
