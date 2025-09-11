<?php
/*
🔹 Ejercicios de Funciones
1. Funciones predefinidas

Crea una variable $texto = "Aprendiendo PHP es divertido";
Usa funciones predefinidas para:

--Mostrar la cantidad de caracteres.

--Mostrar el texto en mayúsculas.

--Mostrar el texto en minúsculas.

👉 Resultado esperado (ejemplo):
Longitud: 28
MAYÚSCULAS: APRENDIENDO PHP ES DIVERTIDO
minúsculas: aprendiendo php es divertido
*/
$texto = "Aprendiendo PHP, es divertido";

function countCaracteres($texto)
{
    echo strlen($texto) . " <br>";
}

countCaracteres($texto);

function textoMayusculas($texto)
{
    echo strtoupper($texto)  . " <br>";
}
textoMayusculas($texto);

function textoMinusculas($texto)
{
    echo strtolower($texto) . "<br>";
}
textoMinusculas($texto);

// -------------------------------------------

// 2. Función personalizada simple

// Crea una función llamada saludar() que imprima:
// 👉 "¡Hola, bienvenido a PHP!"

// Llama la función 3 veces seguidas.

function saludar()
{
    echo "¡Hola, bienvenido a PHP!" . " <br>";
}
saludar();

// ------------------------------------------------
// 3. Función con parámetros

// Crea una función presentar($nombre, $edad) que reciba nombre y edad, e imprima:
// 👉 "Mi nombre es Ameth y tengo 32 años."

// Llama la función con al menos 2 personas diferentes.

function presentar($nombre, $edad)
{
    echo "Mi nombre es $nombre y tengo $edad años" . "<br>";
}

presentar("Ameth", 32);
presentar("Sam", 28);
presentar("Lola", 27);
// -------------------------------------------------

// 4. Función con retorno

// Crea una función multiplicar($a, $b) que devuelva el producto.
// Guarda el resultado en una variable $resultado y muéstralo en pantalla.

// 👉 Resultado esperado:


function  multiplicar($a, $b)
{
    return $a * $b;
}

$resultado = multiplicar(5, 10);

echo "El resultado de la multiplicación es: " . $resultado . "<br>";


// ----------------------------------------------------
// 5. Ejercicio extra (mezclado)

// Crea una función calcularPromedio($numeros) que reciba un array de números y devuelva el promedio.
// Prueba la función con este array:
$notas = [85, 90, 78, 92];

function calcularPromedio($numeros)
{
    return array_sum($numeros) / count($numeros);
}

$promedio = calcularPromedio($notas);

echo "El promedio es: " . $promedio;
