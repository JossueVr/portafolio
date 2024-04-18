<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego para Adivinar un Número</title>
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
        <h2>Juego para Adivinar un Número</h2>
        <form method="post">
            <label for="numero">Ingrese un número:</label>
            <input type="number" id="numero" name="numero" required>
            <br><br>
            <input type="submit" value="Comprobar">
        </form>
        <?php
        session_start();

        if (!isset($_SESSION["numero"])) {
            $_SESSION["numero"] = rand(1, 100);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $adivinar = $_POST["numero"];
            $numero = $_SESSION["numero"];

            if ($adivinar == $numero) {
                echo "<p>¡Felicidades! Has adivinado el número $numero.</p>";
                unset($_SESSION["numero"]);
            } elseif ($adivinar < $numero) {
                echo "<p>El número es mayor.</p>";
            } else {
                echo "<p>El número es menor.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
