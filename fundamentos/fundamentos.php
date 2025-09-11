<!-- Sintaxis
  /*
  <?php
    // Aquí va tu código PHP
    ?>
*/
-->
<?php

// echo "Hola";


// Variables


// -------------------------------------------
// 2. Variables

// --Se definen con $.
// --No necesitas declarar el tipo de dato, PHP lo asigna automáticamente.
// --Diferencian entre mayúsculas y minúsculas.

// $nombre = "Sam";
// $edad = 30;
// echo "Mi nombre es $nombre y tengo $edad años";


// ----------------------------------------
// 3. Constantes

// --Se definen con define().
// --No se pueden cambiar una vez declaradas.

define("PI", 3.1416);
echo PI;


// -------------------------------------------
// 4. Tipos de datos

// Los principales son:

// --String → texto ("Hola")
// --Integer → enteros (25)
// --Float / Double → decimales (3.14)
// --Boolean → true o false
// --Array → conjunto de valores
// --Object → instancias de clases
// --NULL → sin valor


$cadena = "PHP";
$numero = 10;
$decimal = 3.5;
$activo = true;
$nulo = null;

// 5. Operadores principales

// --Aritméticos: +, -, *, /, %
// --Asignación: =, +=, -=
// ------   = → asigna un valor nuevo.
// ------   += → suma al valor actual.
// ------   -= → resta al valor actual.
// --Comparación: ==, ===, !=, <, >, <=, >=
// --Lógicos: && (AND), || (OR), ! (NOT)


$a = 10;
$b = 3;
echo $a + $b; // 13
echo $a % $b; // 1 (residuo)




?>