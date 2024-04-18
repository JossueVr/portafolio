<form method="post">
    <label for="numero">Ingrese un número para mostrar su tabla de multiplicar:</label>
    <input type="number" id="numero" name="numero" required>
    <input type="submit" value="Mostrar tabla">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    echo "<h3>Tabla de multiplicar del $numero:</h3>";
    echo "<table>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td>$numero</td><td>x</td><td>$i</td><td>=</td><td>" . ($numero * $i) . "</td></tr>";
    }
    echo "</table>";
}
?>
