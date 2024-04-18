<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú de Restaurante</title>
</head>
<body>
    <?php
    $plato = "";
    $precio = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["opcion"])) {
            $opcion = $_POST["opcion"];

            switch ($opcion) {
                case "1":
                    $plato = "Hamburguesa";
                    $precio = 25.525;
                    break;
                case "2":
                    $plato = "Pizza";
                    $precio = 18.525;
                    break;
                case "3":
                    $plato = "Ensalada";
                    $precio = 15.225;
                    break;
                case "4":
                    $plato = "Perro caliente";
                    $precio = 19.975;
                    break;
                default:
                    $plato = "Opción no válida";
            }
        }
    }
    ?>
    <h2>Menú de Restaurante</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="opcion">Seleccione una comida:</label>
        <select name="opcion" id="opcion" required>
            <option value="1">Hamburguesa</option>
            <option value="2">Pizza</option>
            <option value="3">Ensalada</option>
            <option value="4">Perro caliente</option>
        </select>
        <br>
        <button type="submit">Seleccionar</button>
    </form>
    <div>
        <?php
        if ($plato != "Opción no válida") {
            echo "<p>Usted ha seleccionado: $plato</p>";
            echo "<p>Precio: $precio Pesos</p>";
        } else {
            echo "<p>$plato</p>";
        }
        ?>
    </div>
</body>
</html>
