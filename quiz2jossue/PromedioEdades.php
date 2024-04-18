<!DOCTYPE html>
<htm>
<head>
<title>Promedio de Edades</title>
</head>
<body>
<?php

$edades = array(25, 30, 35, 40, 45);
$sumaEdades = array_sum($edades);
$cantidadEdades = count($edades);
$promedioEdad = $sumaEdades / $cantidadEdades;
echo "El promedio de la edad es:" . $promedioEdad;
?>

</body>

</htm>