<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3ciudadescolombia</title>
</head>
<body>

<?php
$ciudadesclombia = array(
    array("Bogota", "Cundinamarca"),
    array("Medellin", "Antioquia"),
    array("Barranquilla", "Atlantico")
);
echo "<h2>Capitales de Colombia</h2>";
echo "<p> Numero de ciudades: " . count($ciudadesclombia) . "</p>";

echo "<table border='1'>";
echo "<tr><th>Ciudad</th><th>Departamento</th></tr>";

foreach ($ciudadesclombia as $ciudad) {
    echo "<tr>";
    foreach ($ciudad as $detale) {
        echo "<td>$detale</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>