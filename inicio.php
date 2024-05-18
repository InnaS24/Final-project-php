<?php
include("procesar_registro.php");
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
</head>
<body>
    <h2>Registrar Usuario</h2>
    <form action="procesar_registro.php" method="POST">
       
        <label for="correo">Correo Electrónico:</label><br>
        <input type="email" id="correo" name="correo" required><br>

        <label for="contrasena">Contraseña:</label><br>
        <input type="password" id="contrasena" name="contrasena" required><br>

        <input type="submit" value="Registrar">
    </form>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo 'Usuario creado';
}
?>
</body>
</html>

