<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../config.php';

$errores = [];
$ok = false;

// 1) Leer y normalizar datos
$nombre  = trim($_POST['nombre']  ?? '');
$email   = trim($_POST['email']   ?? '');
$mensaje = trim($_POST['mensaje'] ?? '');

// 2) Validaciones
if ($nombre === '' || strlen($nombre) < 2) {
    $errores[] = "El nombre es obligatorio (mínimo 2 caracteres).";
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El email es obligatorio y debe ser válido.";
}
if ($mensaje === '' || strlen($mensaje) < 5) {
    $errores[] = "El mensaje es obligatorio (mínimo 5 caracteres).";
}

// 3) Si no hay errores → insertar
if (!$errores) {
    // 👉 Si no hay errores de validación (nombre, email, mensaje), recién ahí intentamos guardar en la base de datos.
    $sql  = "INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)";
    // Se define la consulta: En lugar de meter las variables directo (lo inseguro sería "VALUES ('$nombre', '$email', '$mensaje')"), usas ? como placeholders.
    // Eso evita inyección SQL (ejemplo: que alguien ponga "DROP TABLE" en el formulario).

    // Preparamso al consulta:
    $stmt = mysqli_prepare($conexion, $sql); // mysqli_prepare prepara la sentencia SQL con los ?.
    // Te devuelve un objeto $stmt que luego “rellenas” con los valores.
    // Si algo falla (por ejemplo, la tabla no existe), $stmt será false.

    if (!$stmt) {
        $errores[] = "Error preparando la consulta: " . mysqli_error($conexion);
    } else {
        mysqli_stmt_bind_param($stmt, "sss", $nombre, $email, $mensaje); // Aquí le dices a MySQL cómo sustituir los ? por valores reales.
        /*
        "sss" → significa que los tres valores son strings.
        s = string
        i = integer
        d = double (decimal)
        b = blob (archivos binarios)
        $nombre, $email, $mensaje → se inyectan de manera segura en la consulta.
        */
        if (mysqli_stmt_execute($stmt)) { // ejecuta la consulta ya con los datos dentro.
            // Si se ejecuta bien, ponemos $ok = true para mostrar el mensaje de éxito.
            $ok = true;
            // Limpia para no repoblar
            $nombre = $email = $mensaje = '';
        } else {
            $errores[] = "Error insertando: " . mysqli_stmt_error($stmt); // Si ocurre un error se guarda en el array de $errores
        }
        mysqli_stmt_close($stmt);
        /*
        Importante: cierra el statement y libera recursos.
        No es obligatorio para que funcione, pero sí una buena práctica.
        */
    }

    /*
📌 Resumen

? = marcadores seguros para evitar inyección SQL.
mysqli_prepare = prepara la consulta con esos placeholders.
mysqli_stmt_bind_param = enlaza cada ? con una variable, especificando el tipo.
mysqli_stmt_execute = ejecuta la sentencia.
$ok = true = nos sirve para mostrar feedback al usuario.
mysqli_stmt_close = buena práctica para liberar memoria.
*/
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Procesar contacto</title>
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <div class="container">
        <h1>Procesar contacto</h1>

        <?php if ($ok): ?>
            <div class="alert alert-success">✅ Registro guardado correctamente.</div>
            <p><a href="../public/form_contacto.php">← Crear otro</a> | <a href="../listar.php">Ver listados</a></p>
        <?php else: ?>
            <?php if ($errores): ?>
                <div class="alert alert-error">
                    <?php foreach ($errores as $e): ?>
                        <div><?= htmlspecialchars($e, ENT_QUOTES, 'UTF-8') ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Re-mostramos el formulario con los valores ingresados -->
            <form method="post" action="">
                <label>Nombre</label>
                <input name="nombre" value="<?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?>" required>

                <label>Email</label>
                <input type="email" name="email" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>" required>

                <label>Mensaje</label>
                <textarea name="mensaje" rows="4" required><?= htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8') ?></textarea>

                <button type="submit">Enviar</button>
            </form>

            <p style="margin-top:12px;"><a href="../public/form_contacto.php">← Volver al formulario original</a></p>
        <?php endif; ?>
    </div>
</body>

</html>




<!-- si no quiero la parte de html solo seria: -->

<?php

// require __DIR__ . '/../config.php';

// $nombre  = trim($_POST['nombre']  ?? '');
// $email   = trim($_POST['email']   ?? '');
// $mensaje = trim($_POST['mensaje'] ?? '');

// if ($nombre && filter_var($email, FILTER_VALIDATE_EMAIL) && $mensaje) {
//     $sql  = "INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)";
//     $stmt = mysqli_prepare($conexion, $sql);
//     mysqli_stmt_bind_param($stmt, "sss", $nombre, $email, $mensaje);
//     mysqli_stmt_execute($stmt);
//     mysqli_stmt_close($stmt);

//     echo "✅ Registro insertado correctamente";
// } else {
//     echo "❌ Error en los datos";
// }
