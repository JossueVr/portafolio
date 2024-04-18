<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificar Número</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <?php
    $mensaje = "";
    $estilo = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["numero"])) {
            
            $numero = $_POST["numero"];
            
            if ($numero > 0) {
                $mensaje = "numero positivo";
                $estilo = "positivo";
            } elseif ($numero < 0) {
                $mensaje = "numero negativo";
                $estilo = "negativo";
            } else {
                $mensaje = "El número es cero.";
                $estilo = "cero";
            }
        } else {
            $mensaje = "ingrese un número.";
        }
    }
    ?>

    <h2>Verificar si un número es positivo o negativo</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="text" name="numero" id="numero" required>
        <button type="submit">Verificar</button>
    </form>
    <div class="<?php echo $estilo; ?>">
        <p><?php echo $mensaje; ?></p>
    </div>
</body>
</html>
