<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Formulario de Contacto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/form.css?v= <?php echo time(); ?>">
</head>

<body>

    <div class="container">
        <h1>Contacto</h1>

        <form action="../app/procesar_contacto.php" method="post" novalidate>
            <div style="margin-bottom:10px;">
                <label>Nombre</label><br>
                <input name="nombre" required>
            </div>

            <div style="margin-bottom:10px;">
                <label>Email</label><br>
                <input type="email" name="email" required>
            </div>

            <div style="margin-bottom:10px;">
                <label>Mensaje</label><br>
                <textarea name="mensaje" rows="4" required></textarea>
            </div>

            <button type="submit">Enviar</button>
        </form>
    </div>

</body>

</html>