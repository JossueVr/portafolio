<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa para Digitar Colores</title>
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
        <h2>Programa para Digitar Colores</h2>
        <form method="post">
            <label for="color">Digite un color:</label>
            <input type="text" id="color" name="color" required>
            <br><br>
            <input type="submit" value="Comprobar">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $color = strtolower($_POST["color"]);

            if ($color == "rojo") {
                echo "<p>Finalizado. Has digitado el color rojo.</p>";
            } else {
                echo "<p>Has digitado el color: $color</p>";
            }
        }
        ?>
    </div>
</body>
</html>
