<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
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
        <h2>Calcular IMC</h2>
        <form method="post">
            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso" name="peso" step="0.01" required>
            <br><br>
            <label for="altura">Altura (m):</label>
            <input type="number" id="altura" name="altura" step="0.01" required>
            <br><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];
            $imc = $peso / ($altura * $altura);
            echo "<p>Su índice de masa corporal (IMC) es: $imc</p>";
        }
        ?>
    </div>
</body>
</html>
