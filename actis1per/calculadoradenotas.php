<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Nota</title>
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
        <h2>Calcular Nota</h2>
        <form method="post">
            <label for="nota1">Nota 1:</label>
            <input type="number" id="nota1" name="nota1" required>
            <br><br>
            <label for="nota2">Nota 2:</label>
            <input type="number" id="nota2" name="nota2" required>
            <br><br>
            <label for="nota3">Nota 3:</label>
            <input type="number" id="nota3" name="nota3" required>
            <br><br>
            <label for="nota_final">Nota Final:</label>
            <input type="number" id="nota_final" name="nota_final" required>
            <br><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $nota3 = $_POST["nota3"];
            $notaFinal = $_POST["nota_final"];
            $notaDefinitiva = ($nota1 + $nota2 + $nota3 + $notaFinal) / 4;
            echo "<p>La nota definitiva del estudiante es: $notaDefinitiva</p>";
        }
        ?>
    </div>
</body>
</html>
