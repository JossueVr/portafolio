<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Descuento</title>
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
        <h2>Calculadora de Descuento</h2>
        <form method="post">
            <label for="total">Monto Total de la Compra ($):</label>
            <input type="number" id="total" name="total" step="0.01" required>
            <br><br>
            <input type="submit" value="Calcular Descuento">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $total = $_POST["total"];
            $descuento = 0;
            if ($total >= 100) {
                $descuento = 0.10;
            } elseif ($total >= 50 && $total < 100) {
                $descuento = 0.05;
            } else {
                $descuento = 0;
            }
            $montoDescuento = $total * $descuento;
            $montoFinal = $total - $montoDescuento;
            echo "<p>Monto Original: $total $</p>";
            echo "<p>Porcentaje de Descuento: " . ($descuento * 100) . "%</p>";
            echo "<p>Monto Final después de Aplicar el Descuento: $montoFinal $</p>";
        }
        ?>
    </div>
</body>
</html>
