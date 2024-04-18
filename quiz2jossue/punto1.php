<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NombreFrutas</title>
</head>
<body>
<?php
$frutas = array("Arandano", "Banano", "Sandia", "Uva");

echo "<h2>Lista de Frutas</h2>";
echo "<ol>";
foreach ($frutas as $fruta) {
    echo "<li>$fruta</li>";
}
echo "</ol>";
?>
</body>
</html>