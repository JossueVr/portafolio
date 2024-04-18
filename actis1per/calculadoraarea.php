<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Área</title>
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
        <h2>Calcular Área</h2>
        <form method="post">
            <label for="figura">Seleccione la figura:</label>
            <select name="figura" id="figura">
                <option value="cuadrado">Cuadrado</option>
                <option value="rectangulo">Rectángulo</option>
                <option value="triangulo">Triángulo</option>
                <option value="circulo">Círculo</option>
            </select>
            <br><br>
            <label for="dimension1">Dimensión 1:</label>
            <input type="number" id="dimension1" name="dimension1" step="0.01" required>
            <br><br>
            <label for="dimension2">Dimensión 2:</label>
            <input type="number" id="dimension2" name="dimension2" step="0.01">
            <br><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $figura = $_POST["figura"];
            $dimension1 = $_POST["dimension1"];
            $dimension2 = isset($_POST["dimension2"]) ? $_POST["dimension2"] : null;

            switch ($figura) {
                case 'cuadrado':
                    $area = $dimension1 * $dimension1;
                    echo "<p>El área del cuadrado es: $area</p>";
                    break;
                case 'rectangulo':
                    $area = $dimension1 * $dimension2;
                    echo "<p>El área del rectángulo es: $area</p>";
                    break;
                case 'triangulo':
                    $area = ($dimension1 * $dimension2) / 2;
                    echo "<p>El área del triángulo es: $area</p>";
                    break;
                case 'circulo':
                    $area = pi() * $dimension1 * $dimension1;
                    echo "<p>El área del círculo es: $area</p>";
                    break;
                default:
                    echo "<p>Por favor, seleccione una figura válida.</p>";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>
