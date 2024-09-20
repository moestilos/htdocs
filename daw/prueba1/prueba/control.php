<?php
session_start();//INICIAMOS LA SESION

if ($_POST['user'] == 'willy' && $_POST['clave']== '123') {
    $_SESSION[ 'user'] = $_POST['user'];
    header('Location: portada.php');
} else {

    header('Location: Registro.php');
}
?>
