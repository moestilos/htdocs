<?php
include('inc_comunes.php');
include('inc_usuarios.php');
$tituloPagina = 'Registro de User';

if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $conexion = conectarse($bdserver,$serveruser,$serverpwd,$bd,$port);
    $sql = "SELECT * FROM users WHERE id=$user_id;";
    $consulta = mysqli_query($conexion,$sql);
    $reg = mysqli_fetch_array($consulta);

    $tituloPagina = 'Formulario de edición datos de '.$reg['user'].'('.$reg['id'].')';
}else{
    $reg = array('id'=>0,'user'=>'','password'=>'','avatar'=>'');
}


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
    <?php include('inc_header.php') ?>
    <main>
    <h1><?php echo $tituloPagina ?></h1>
    <div  class="formulario">
    <form name="formu" id="formu" action="usuarios_formu.php" method="POST">
        <input type="hidden" name="id" id="id" value="<?= $reg['id'] ?>">
        <div>Usuario: <input type="text" name="user" id="user" value="<?= $reg['user'] ?>"></div>
        <div>Contraseña: <input type="password" name="password" id="password" value="<?= $reg['password'] ?>"></div>
        <div>Avatar: <input type="text" name="avatar" id="avatar" value="<?= $reg['avatar'] ?>"></div>
        <div><input type="submit" value="ENVIAR"></div>
    </form>
    </div>

    </main>
    <?php include('inc_footer.php') ?>

</body>

</html>