<?php
$conexion = mysqli_connect("127.0.0.1", "root", "samperez0819", "holamundo", 3306);

if ($conexion) {
    echo "✅ Conexión exitosa a la base de datos";
} else {
    echo "❌ Conexión fallida: " . mysqli_connect_error();
}
