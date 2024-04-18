<!DOCTYPE html>

<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Problemas en PHP</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="?opcion=1">Registro de Ventas Diarias</a></li><li>
                <a href="?opcion=2">Generación de Facturas Mensuales</a></li><li>
                    <a href="?opcion=3">Impresión de Lista de Tareas Pendientes</a>
                    </li><li><a href="?opcion=4">Procesamiento de Datos de Empleados</a>
                    </li><button><a href="PERIODO2.html" class="btn btn-default">REGRESAR</a>
                    </button></ul></nav>
                    <?php
                    if (isset($_GET['opcion'])) {$opcion = $_GET['opcion'];switch ($opcion) {case 1:$totalVentas = 0;$diasSemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];
                        echo "<h2>Registro de Ventas Diarias</h2>";
                        echo "<form method='post'>";foreach ($diasSemana as $dia) {
                            echo "<label>$dia:</label> <input type='number' name='ventas[$dia]' required><br>";}
                            echo "<input type='submit' value='Calcular Total'>";
                            echo "</form>";if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                if (isset($_POST['ventas'])) {foreach ($_POST['ventas'] as $dia => $cantidad) {$totalVentas += $cantidad;}
                                echo "<p>Total de Ventas Semanales: $totalVentas</p>";}
                            }
                            break;
case 2:$meses = 12;$clientes = ['Cliente1', 'Cliente2', 'Cliente3'];
echo "<h2>Generación de Facturas Mensuales</h2>";
echo "<ul>";do {foreach ($clientes as $cliente) {
    echo "<li>$cliente - Factura del Mes $meses</li>";}$meses--;} while ($meses > 0);
    echo "</ul>";break;
case 3:$tareasPendientes = ['Tarea1', 'Tarea2', 'Tarea3', 'Tarea4'];
echo "<h2>Lista de Tareas Pendientes</h2>";
echo "<ul>";for ($i = 0; $i < count($tareasPendientes); $i++) {
    echo "<li>$tareasPendientes[$i]</li>";}
    echo "</ul>";break;
case 4:
$sueldos = [2000, 2500, 3000, 2200];$totalSueldos = 0;$numEmpleados = count($sueldos);
echo "<h2>Procesamiento de Datos de Empleados</h2>";
echo "<ul>";do {$totalSueldos += current($sueldos);next($sueldos);} while (key($sueldos) !== null);$promedioSueldos = $totalSueldos / $numEmpleados;
echo "<li>Número de Empleados: $numEmpleados</li>";echo "<li>Salario Promedio: $promedioSueldos</li>";
echo "</ul>";break;
default:
echo "<p>Selecciona una opción válida.</p>";
break;
}
}
?>
</body>