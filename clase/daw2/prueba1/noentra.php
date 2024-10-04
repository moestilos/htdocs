<?php
$noControlesAcceso = true;
include('inc_comunes.php');

$contenido = "No se ha encontrado ese usuario. Lleva ".$_SESSION['intentos']." intentos";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
    <title>Cerrado acceso</title>
</head>
<body>
   <h1>Cerrado acceso a la aplicación</h1> 

   <p><?=$contenido?></p>
   <p><a href="./">Volver a intentarlo</a></p>
</body>
</html>