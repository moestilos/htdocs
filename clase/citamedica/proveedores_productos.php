<?php
include('inc_comunes.php');
$tituloPagina = 'Sesion Iniciada: , '.$_SESSION['usuario'];

$idproveedor = $_GET['idproveedor'];

$conexion = conectarse($bdserver,$serveruser,$serverpwd,$bd,$port);

$sql = "SELECT * FROM productos WHERE proveedor_id=$idproveedor ;";

$consulta = mysqli_query($conexion,$sql);

$listado = '';
$listado.= '<table>';
$listado.= '<tr><th>ID</th><th>PRODUCTO</th><th>PRECIO</th><th>FOTO</th><th>DTO</th><th>PRECIO FINAL</th></tr>';
while($reg = mysqli_fetch_array($consulta)){
    $dto = $reg['descuento']*100;
    $precioFinal = $reg['precio'] - $reg['precio']*$reg['descuento'];

    $listado.="<tr>";
        $listado.="<td>".$reg['id']."</td>"; 
        $listado.="<td>".$reg['producto']."</td>"; 
        $listado.="<td>".$reg['precio']."</td>"; 
        $listado.="<td><img src='fotos/".$reg['foto']."' width='50' alt='Foto de ".$reg['producto']."'></td>"; 
        $listado.="<td>".$dto."%</td>"; 
        $listado.="<td>".$precioFinal."</td>"; 
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
    <?php include('inc_header.php') ?>
    <main>
    <h1><?php echo $tituloPagina ?></h1>
    <h2>Productos de <?= $proveedor ?></>
    <?=$listado?>

    </main>
    <?php include('inc_footer.php') ?>
</body>

</html>