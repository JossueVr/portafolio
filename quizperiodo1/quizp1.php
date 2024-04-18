<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Ejercicios PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            background-color: #444;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0 10px;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            text-align: center;
        }
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <h1>Página de Ejercicios PHP</h1>
    </header>
    <nav>
        <a href="quizperiodo1\problema1.php">Problema 1</a>
        <a href="quizperiodo1\problema2.php">Problema 2</a>
        <a href="quizperiodo1\problema3.php">Problema 3</a>
    </nav>
    <div class="container">
        <?php
        if (isset($_GET['opcion'])) {
            $opcion = $_GET['opcion'];
            switch ($opcion) {
                case 1:
                    echo "<h2>Problema 1: Precio de entrada según edad</h2>";
                    include('problema1.php');
                    break;
                case 2:
                    echo "<h2>Problema 2: Descuento según puntos</h2>";
                    include('problema2.php');
                    break;
                case 3:
                    echo "<h2>Problema 3: Tabla de multiplicar</h2>";
                    include('problema3.php');
                    break;
                default:
                    echo "<p>Opción no válida.</p>";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>
