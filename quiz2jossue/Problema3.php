<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 3: Registro de usuarios</title>
</head>
<body>
<h1>Registro de Usuarios</h1>
<form method="post">
Usuario: <input type="text" name="username" required><br>
Correo Electrónico: <input type="email" name="email" required><br>
Contraseña: <input type="password" name="password" required><br>
<input type="submit" value="Registrar">
</form>
<h2>Usuarios Registrados</h2>
<ul>
<?php foreach ($usuarios as $usuario): 
    ?>
<li><?php echo $usuario["username"] . ' - ' . $usuario["email"]; ?></li>
<?php endforeach; 
?>

</ul>
</body>
</html>
</body>
</html>