<?php
include('inc_comunes.php');

$tituloPagina = 'Cucu Cucurella, '.$_SESSION['usuario'];


$conexion = conectarse($bdserver,$serveruser,$serverpwd,$bd,$port);

$sql = "SELECT * FROM productos;";

$consulta = mysqli_query($conexion,$sql);

$listado = '';
$listado .= '<table class="tabla">';
$listado.= '<tr><th>ID</th><th>PRODUCTO </th><th>PRECIO</th><th>FOTO</th><th>DTO</th><th>PRECIO FINAL</th></tr>';
while($reg = mysqli_fetch_array($consulta)){
    $dto = $reg['descuento']*100;
    $precioFinal = $reg['precio'] - $reg['precio']*$reg['descuento'];

    $listado.="<tr class='tablatr'>";
        $listado.="<td>".$reg['id']."</td>"; 
        $listado.="<td>".$reg['producto']."</td>"; 
        $listado.="<td>".$reg['precio']."</td>"; 
        $listado.="<td>".$dto."%</td>"; 
        $listado.="<td>".$precioFinal."</td>"; 
        $listado.="<td><img src='fotos/".$reg['foto']."' width='100' alt='Foto de ".$reg['producto']."'></td>"; 
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
    <title><?=$tituloPagina ?></title>
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
<footer>
    Guillermo Mateos De Los Santos Aguilera
</footer>
</html>