<?php
include('inc_comunes.php');
include('inc_usuarios.php');



$tituloPagina = 'One piece    '.$_SESSION['usuario'];


$conexion = conectarse($bdserver,$serveruser,$serverpwd,$bd,$port);

$sql = "SELECT * FROM users;";

$consulta = mysqli_query($conexion,$sql);

$listado = '';
$listado.= '<table>';
$listado.= '<tr><th>ID</th><th>User</th><th>avatar</th><th>Settings</th></tr>';
while($reg = mysqli_fetch_array($consulta)){
    $listado.="<tr>";
        $listado.="<td>".$reg['id']."</td>"; 
        $listado.="<td>".$reg['user']."</td>"; 
        $listado.="<td><img src='fotos/".$reg['avatar']."' width='70' alt='Foto de ".$reg['user']."'></td>";  
        $listado.="<td><a href='usuarios_formu.php?id=".$reg['id']."'>Editar</a></td>"; 
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
    <br>
    <main>

    <h1><?php echo $tituloPagina ?></h1>

        <div class = "formulario">
        
        <?=$listado?>
        </div>
    </main>
    <?php include('inc_footer.php') ?>
</body>

<footer>Guillermo Mateos De Los Santos Aguilera</footer>

</html>