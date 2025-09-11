<?php

/*
🔹 5. Arreglos y Strings en PHP
✅ 1. Arrays Indexados

Son los que tienen índices numéricos automáticos (0,1,2,...).

*/
$frutas = ["Manzana", "Banana", "Mango"];
echo $frutas[0]; // Manzana
echo $frutas[2]; // Mango

// 👉 Los índices los pone PHP automáticamente (0 → Manzana, 1 → Banana, 2 → Mango).

// ---------------------------------------------
// ✅ 2. Arrays Asociativos

// Son arrays donde tú defines las claves.
$persona = [
    "nombre" => "Ameth",
    "edad" => 32,
    "ciudad" => "Valledupar"
];

echo $persona["nombre"]; // Ameth
echo $persona["edad"];   // 32

// 👉 Aquí las claves son "nombre", "edad", "ciudad".

// -----------------------------------------
$texto = "Aprendiendo PHP";

// Longitud
echo strlen($texto); // 14

// Mayúsculas y minúsculas
echo strtoupper($texto); // APRENDIENDO PHP
echo strtolower($texto); // aprendiendo php

// Primera letra en mayúscula
echo ucfirst("ameth"); // Ameth

// Substring (extraer parte de un string)
echo substr($texto, 0, 5); // Apren

// Buscar posición
echo strpos($texto, "PHP"); // 11

// Reemplazar texto
echo str_replace("PHP", "programación", $texto);
// Aprendiendo programación
