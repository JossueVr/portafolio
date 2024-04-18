<form method="post">
    <label for="edad">Ingrese la edad del cliente:</label>
    <input type="number" id="edad" name="edad" required>
    <input type="submit" value="Calcular precio">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST["edad"];
    $precio = 0;
    if ($edad < 4) {
        $precio = 0;
    } elseif ($edad >= 4 && $edad <= 18) {
        $precio = 5000;
    } else {
        $precio = 10000;
    }
    echo "<p>El precio de la entrada es: $precio pesos.</p>";
}
?>
