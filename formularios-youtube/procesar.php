<?php

$nombre = $_REQUEST['name'];
$edad = $_REQUEST['edad'];
$sexo = $_REQUEST['sexo'];
$roles = $_REQUEST['roles'];

echo "<p>El nombre del usuario es: $nombre - $edad</p> <br>";
echo "La edad del usuario es: $edad" . "<br>";
echo "El sexo del usuario es: " . $sexo . "<br>";

echo "Roles: <br>";

echo "<ul>";
foreach ($roles as $rol) {
    echo "<li>$rol</li>";
}
echo "</ul>";
