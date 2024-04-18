<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Acceso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Validación de Acceso</h2>
        <form method="post">
            <label for="usuario">Nombre de Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            <br><br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <br><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
        <?php
        // Define usuario y contraseña válidos
        $usuarioValido = "usuario";
        $passwordValido = "contraseña";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = $_POST["usuario"];
            $password = $_POST["password"];
            if ($usuario == $usuarioValido && $password == $passwordValido) {
                echo "<p>Bienvenido, $usuario. Acceso completo concedido.</p>";
            } else {
                echo "<p>Usuario o contraseña incorrectos. Acceso limitado para usuarios invitados.</p>";
            }
        }
        ?>
    </div>
</body>
</html>

