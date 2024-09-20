<?php
session_start();//INICIAMOS LA SESION

include('usuarios.php');



if(isset($usuarios[$_POST['user']])){
    if($_POST['password'] == $usuarios[$_POST['user']]['password']){
        $_SESSION['user'] =$_POST['user'];
        header('Location: main.php');
}
} else {    
    header('Location: Registro.php');
}






?>
