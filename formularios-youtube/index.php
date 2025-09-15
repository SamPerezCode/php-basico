<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Prueba</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            font-size: 0.9rem;
            margin-bottom: 0.3rem;
            color: #555;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.7rem;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            outline: none;
            transition: border 0.2s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #007bff;
        }

        .btn-submit {
            width: 100%;
            padding: 0.8rem;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-submit:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Formulario de Prueba</h2>
        <!-- Ojo: aquí el action apunta al archivo que procesa -->
        <form action="manejo-form.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="email">Correo:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn-submit">Enviar</button>
        </form>
    </div>
</body>

</html>