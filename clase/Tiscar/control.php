<?php
$noControlesAcceso = true;
include('conexioBD.php');

$conexion = conectarse($bdserver,$serveruser,$serverpwd,$bd,$port);

$sql = "SELECT * FROM users WHERE user='".$_POST['usuario']."' AND password='".$_POST['clave']."';";

$consulta = mysqli_query($conexion,$sql);

if(mysqli_num_rows($consulta)==0){
    if(!isset($_SESSION['intentos'])){$_SESSION['intentos']=1;}
    else{$_SESSION['intentos']++;}
    header('Location: inicioMalo.php');
}else{
    $reg = mysqli_fetch_array($consulta);
    $_SESSION['idusuario'] = $reg['id'];
    $_SESSION['usuario'] = $reg['user'];
    $_SESSION['avatar'] = $reg['avatar'];
    header('Location: portada.php');
}
