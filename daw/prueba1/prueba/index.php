


<?php
    $contenido ='<img src="imagenMono.jpg">';







?>






<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>El pequeño Ismael</title>
</head>
    <body class="bonito">
    <div>
    <h1>Los viajes de Ismael</h1>
    </div>
    <div class="max" >
    <?php echo $contenido; ?>
    </div>
    <div class="centrar">   
        <form action = "control.php" method="post">User: <input type="text" name="user">
    password: <input type="password" name="clave">
<input type="submit" value="enviar"></form>
</div>


<div class="coco">
    <?php
    echo "Esta es la portada";
?>

    <p>Joder</p>
    </div>

</body>
</html>