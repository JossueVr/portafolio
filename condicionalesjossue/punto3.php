<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificar Número</title>
</head>
<body>
    <?php
    $mensaje = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST["numero"])) {
            
            $numero = $_POST["numero"];

            
            if ($numero > 0) {
                $mensaje = "El número es positivo.";
            } elseif ($numero < 0) {
                $mensaje = "El número es negativo.";
            } else {
                $mensaje = "El número es cero.";
            }
        } else {
            $mensaje = "Por favor, ingrese un número.";
        }
    }
    ?>

    <h2>Verificar si un número es positivo, negativo o cero</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="text" name="numero" id="numero" required>
        <button type="submit">Verificar</button>
    </form>
    <div>
        <?php
        if ($mensaje === "El número es cero.") {
            echo "<p style='color: blue; background-color: lightgreen;'>$mensaje</p>";
        } else {
            echo "<p>Resultado: $mensaje</p>";
        }
        ?>
    </div>
</body>
</html>
