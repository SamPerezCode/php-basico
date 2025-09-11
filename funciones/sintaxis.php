<?php
/*
🔹 4. Funciones en PHP

Una función es un bloque de código que se puede reutilizar.
En PHP tenemos dos tipos principales:

1. Funciones predefinidas → ya vienen en PHP listas para usar.
2. Funciones personalizadas → las creas tú.

// --------------------------------
✅ 1. Funciones predefinidas
Son las que PHP trae por defecto. Ejemplos:
*/

// strlen() → cuenta caracteres
echo strlen("Hola Ameth"); // 10

// strtoupper() → convierte a mayúsculas
echo strtoupper("hola"); // HOLA

// strtolower() → convierte a minúsculas
echo strtolower("PHP ES GENIAL"); // php es genial

// round() → redondea números
echo round(3.1416, 2); // 3.14

// date() → muestra fecha
echo date("Y-m-d"); // 2025-09-09 (ejemplo)

// ------------------------------------------
// ✅ 2. Crear funciones personalizadas

// Tú decides el nombre, parámetros y lo que hace.

function saludar()
{
    echo "Hola, bienvenido a PHP!";
}
saludar(); // Llamar la función

// -----------------------------
// ✅ 3. Paso de parámetros

// Puedes enviar datos a una función.

function saludarPersona($nombre)
{
    echo "Hola, $nombre!";
}

saludarPersona("Ameth");  // Hola, Ameth!
saludarPersona("Samyr");  // Hola, Samyr!

// ----------------------------------------------------
// ✅ 4. Retorno de valores
// En lugar de solo imprimir, una función puede devolver un valor con return.
function sumar($a, $b)
{
    return $a + $b;
}

$resultado = sumar(5, 7);
echo "La suma es: $resultado"; // 12

// 📌 Resumen rápido:

// Predefinidas → ya están en PHP.
// Personalizadas → las haces tú.
// Parámetros → datos que recibe la función.
// Retorno → valor que devuelve la función.