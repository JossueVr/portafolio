<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comparar Números</title>
</head>
<body>
    <?php
    $mensaje = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["numero3"])) {
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            $numero3 = $_POST["numero3"];

            
            if ($numero1 == $numero2 && $numero2 == $numero3) {
                $mensaje = "Los tres números son iguales.";
            } else {
                $mayor = max($numero1, $numero2, $numero3);
                $menor = min($numero1, $numero2, $numero3);
                $medio = ($numero1 + $numero2 + $numero3) - $mayor - $menor;

                $mensaje = "El número mayor es $mayor, el número menor es $menor y el del medio es $medio.";
            }
        } else {
            $mensaje = "Por favor, ingrese los tres números.";
        }
    }
    ?>

    <h2>Comparar Números</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1" required>
        <br>
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2" required>
        <br>
        <label for="numero3">Número 3:</label>
        <input type="number" name="numero3" id="numero3" required>
        <br>
        <button type="submit">Comparar</button>
    </form>
    <div>
        <p><?php echo $mensaje; ?></p>
    </div>
</body>
</html>
