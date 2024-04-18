<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tareas</title>
</head>
<body>
<?php
$tareas = array(
    "Estudiar para el examen de matemáticas</br>",
    "Terminar el ensayo de lenguaje</br>",
    "Hacer la investigación para el proyecto de sociales</br>",
    "Completar los ejercicios de programación</br>",
    "Limpiar la pieza</br>"
);
function mostrarTareas($tareas) {
    echo "Lista de tareas pendientes:\n";
    foreach ($tareas as $key => $tarea) {
        echo ($key + 1) . ". " . $tarea . "\n";
    }
}
function marcarTareaCompletada(&$tareas, $indice) {
    if (isset($tareas[$indice])) {
        $tareas[$indice] = "[COMPLETADA] " . $tareas[$indice];
    }
}
mostrarTareas($tareas);
echo "Seleccione el número de la tarea que ha completado: ";
$opcion = intval(readline()) - 1;
marcarTareaCompletada($tareas, $opcion);
mostrarTareas($tareas);

?>
</body>
</html>