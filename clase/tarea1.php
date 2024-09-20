<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
    <title>Pajaporte</title>
</head>
<body>
    <h1>Pajaporte</h1>

    <form method="POST" action="">
        <input type="text" name="user" placeholder="user" required>
        <input type="text" name="edad" placeholder="edad" required>
        <input type="submit" value="➤">
    </form>

    <div class="centrar">
    <?php 
        $edadmayor = 18;

        // Verifica si se envió el formulario
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['user'];
            $edad = $_POST['edad'];

            // Verifica si la edad es un número válido
            if(is_numeric($edad)) {
                if($edad >= $edadmayor) {
                    echo "$nombre con $edad años es mayor de edad.";
                } else {
                    echo "$nombre es menor de edad porque tiene $edad años.";
                }
            } else {
                echo "Por favor, ingresa una edad válida.";
            }
        }
    ?>
    </div>
</body>
</html>
