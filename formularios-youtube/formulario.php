<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-form.css?v=<?php echo time(); ?>">
    <title>Form</title>
</head>

<body>

    <form action="procesar.php" method="POST">
        <label>
            Nombre:
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Edad:
            <input type="number" name="edad">
        </label>
        <br>

        <p style="font-weight: bold;">Sexo: </p>
        <label>
            Masculino:
            <input type="radio" name="sexo" value="Masculino">
        </label>

        <label>
            Femenino:
            <input type="radio" name="sexo" value="Femenino">
        </label>
        <br>

        <br>
        <p>Roles</p>
        <label>
            Administrador:
            <input type="checkbox" name="roles[]" value="Administrador">
        </label>
        <label>
            Editor:
            <input type="checkbox" name="roles[]" value="Editor">
        </label>
        <label>
            Moderador:
            <input type="checkbox" name="roles[]" value="Moderador">
        </label>
        <br>

        <button type="submit">Enviar</button>

    </form>

</body>

</html>