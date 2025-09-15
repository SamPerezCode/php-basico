<?php

$conexion = mysqli_connect("127.0.0.1", "root", "samperez0819", "formularios", 3306);
/*
-- "127.0.0.1" → es el host (dirección del servidor MySQL). 127.0.0.1 o localhost significa que está en tu misma máquina.
-- "root" → usuario de MySQL (por defecto en XAMPP/MAMP/WAMP).
-- "samperez0819" → contraseña del usuario root.
-- "formularios" → nombre de la base de datos que vas a usar.
-- 3306 → puerto por defecto donde escucha MySQL.
👉 Esta función devuelve un objeto de conexión que guardamos en $conexion.
Si falla, devuelve false.
*/

if (!$conexion) { // si la conexión es falsa, significa que falló.
    die("Conexión fallida: " . mysqli_connect_error()); // die(...) → detiene el script y muestra un mensaje de error.
    // mysqli_connect_error() → devuelve el mensaje de error que MySQL lanzó (ej: usuario incorrecto, BD inexistente, etc).
} // else {
//     echo "Conexión exitosa";
// }

mysqli_set_charset($conexion, "utf8mb4"); // "utf8mb4" → la versión moderna de UTF-8 que soporta acentos y emojis
//  Si no lo pones, puede que veas problemas con ñ, tildes o caracteres raros.
// 👉 Siempre es buena práctica definirlo apenas te conectas.

/*
📌 Resumen rápido

--mysqli_connect(...) → abre la conexión.
--if (!$conexion) → revisa si falló.
--die(...) → muestra el error y corta el programa.
--mysqli_connect_error() → explica por qué falló.
--mysqli_set_charset(..., "utf8mb4") → asegura que manejes bien tildes y emojis.
*/
