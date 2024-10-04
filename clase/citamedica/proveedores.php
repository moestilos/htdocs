<?php
include('inc_comunes.php');

$tituloPagina = 'Sesion Iniciada: , '.$_SESSION['usuario'];


$conexion = conectarse($bdserver,$serveruser,$serverpwd,$bd,$port);

$sql = "SELECT * FROM proveedores;";

$consulta = mysqli_query($conexion,$sql);

$listado = '';
$listado .= '<table class="tabla">';
$listado.= '<tr><th>ID</th><th>PROVEEDOR</th><th>EMAIL</th><TH>Productos</TH></tr>';
while($reg = mysqli_fetch_array($consulta)){

    $listado.="<tr class='tablatr'>";
        $listado.="<td>".$reg['id']."</td>"; 
        $listado.="<td>".$reg['proveedor']."</td>"; 
        $listado.="<td>".$reg['email']."</td>"; 
        $listado.="<td><a href='proveedores_productos.php?idproveedor=".$reg['id']."'>Ver productos</a></td>"; 
    $listado.="</tr>";
}
$listado.= '</table>';

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

    <div class = "formulariocata">
    <?=$listado?>
    </div>
    </main>
    <?php include('inc_footer.php') ?>
</body>

</html>