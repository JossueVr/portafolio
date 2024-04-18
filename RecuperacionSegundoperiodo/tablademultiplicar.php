<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa para Mostrar Tabla de Multiplicar</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Programa para Mostrar Tabla de Multiplicar</h2>
        <form method="post">
            <label for="numero">Ingrese un número:</label>
            <input type="number" id="numero" name="numero" min="1" max="10" required>
            <br><br>
            <input type="submit" value="Mostrar Tabla">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
            echo "<h3>Tabla de Multiplicar del $numero:</h3>";
            echo "<table>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero x $i</td><td>=</td><td>$resultado</td></tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>
