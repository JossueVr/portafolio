<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios sobre Calificaciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Comentarios sobre Calificaciones</h2>
        <form method="post">
            <label for="calificacion">Calificación del Estudiante:</label>
            <input type="number" id="calificacion" name="calificacion" min="0" max="100" required>
            <br><br>
            <input type="submit" value="Evaluar">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $calificacion = $_POST["calificacion"];
            $comentario = "";

            if ($calificacion >= 90) {
                $comentario = "Excelente trabajo. ¡Felicidades por tu sobresaliente rendimiento!";
            } elseif ($calificacion >= 80 && $calificacion <= 89) {
                $comentario = "Buen trabajo. Tu esfuerzo está rindiendo frutos.";
            } elseif ($calificacion >= 70 && $calificacion <= 79) {
                $comentario = "Aprobado. Sigue esforzándote para mejorar tus resultados.";
            } else {
                $comentario = "No aprobado. Te animamos a buscar ayuda adicional y mejorar en la siguiente evaluación.";
            }

            echo "<p>Comentario: $comentario</p>";
        }
        ?>
    </div>
</body>
</html>
