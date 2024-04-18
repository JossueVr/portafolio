<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
<?php

$notas = array(

    array("estudiante" => "Estudiante1", "Matematicas" => rand(0, 10), "Ciencias" => rand(0, 5), "Literatura" => 9),
    array("estudiante" => "Estudiante2", "Matematicas" => rand(0, 10), "Ciencias" => rand(0, 7), "Literatura" => 10),
    array("estudiante" => "Estudiante3", "Matematicas" => rand(0, 5), "Ciencias" => rand(0, 8), "Literatura" => 10),


);

for ($i = 0; $i < 3; $i++) {

echo $notas [$i] ["estudiante"] . " Posee estas calificaciones " . "<br>" . $notas [$i] ["Matematicas"] ." en Matematicas" . "<br>" . $notas [$i] ["Ciencias"] . " en Ciencias " . "<br>" . $notas [$i] ["Literatura"]  . " en Literatura" . "<br>" . "<br>"  ;

}




?>
</body>
</html>