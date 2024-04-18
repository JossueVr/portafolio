<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lista5numeros</title>
</head>
<body>
    <?php
    for ($i = 0; $i < 5; $i++) {
        $numero[] = rand(0,10);
    }
    foreach ($numero as $elemento) {
        $cuadrado [] = $elemento * $elemento;
        $cubo [] = $elemento * $elemento * $elemento;
    }
    ?>
    <table>
        <tr><td>Numero</td><td>Cuadrado</td><td>Cubo</td><tr>

<?php
for ($i = 0; $i < 5; $i++) {
    echo "<tr><td>".$numero[$i]."</td>";
    echo "<td>".$cuadrado[$i]."</td>";
    echo "<td>". $cubo[$i]."</td></tr>";
}
?>
</table>
</body>
</html>