<form method="post">
    <label for="puntos">Ingrese la cantidad de puntos:</label>
    <input type="number" id="puntos" name="puntos" required>
    <input type="submit" value="Calcular descuento">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $puntos = $_POST["puntos"];
    $precio = 100;
    $descuento = 0;
    if ($puntos < 100) {
        $descuento = 0.1;
    } elseif ($puntos >= 100 && $puntos < 150) {
        $descuento = 0.12;
    } elseif ($puntos == 150) {
        $descuento = 0.15;
    } else {
        $descuento = 0.2;
    }
    $precioFinal = $precio - ($precio * $descuento);
    echo "<p>El precio final con descuento es: $precioFinal pesos.</p>";
}
?>
