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
        <label for="usuario">User:</label>
        <input type="text" id="usuario" name="usuario" required>
        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" required>
        <input type="submit" value="Enviar">
    </form>
</body>
<footer>
    <p>&copy; Guillermo Mateos De Los Santos Aguilera</p>
</footer>
</html>