<?php
$noControlesAcceso = true;


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body class="entrada">
<form action="control.php" method="post">
    User: <input type="text" name="usuario">
    Contraseña: <input type="password" name="clave">
    <input type="submit" value="Enviar">
</form>
</body>
<footer>
    Guillermo Mateos De Los Santos Aguilera
</footer>
</html>