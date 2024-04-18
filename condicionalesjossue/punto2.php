<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Determinar Par o Impar</title>
</head>
<body>
    <?php
    $mensaje = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST["numero"])) {
            
            $numero = $_POST["numero"];
            
            if ($numero % 2 == 0) {
                $mensaje = "El número es par.";
            } else {
                $mensaje = "El número es impar.";
            }
        } else {
            $mensaje = "ingrese un número.";
        }
    }
    ?>

    <h2>Determinar si un número es par o impar</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="text" name="numero" id="numero" required>
        <button type="submit">Determinar</button>
    </form>
    <div>
        <p><?php echo $mensaje; ?></p>
    </div>
</body>
</html>
