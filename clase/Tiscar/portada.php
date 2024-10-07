<?php
include('conexioBD.php');

$tituloPagina = 'Sesion Iniciado: , '.$_SESSION['usuario'];

?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">


    <title class = "perfil"><?=$tituloPagina ?></title>
</head>
<body>
<div class ="perfil">
    <?php include('inc_header.php') ?>
    </div>
    <main>
        <h1><?php echo $tituloPagina ?></h1>
        <ul>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="catalogo.php">Catálogo</a></li>
            <li><a href="proveedores.php">proveedor</a></li>
        </ul>
    </main>
    <?php include('inc_footer.php') ?>
</body>
<footer>
    Guillermo Mateos De Los Santos Aguilera
</footer>
</html>