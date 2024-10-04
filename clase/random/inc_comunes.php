<?php
session_start(); //Usamos la sesión
if(empty($_SESSION['usuario'])){
    header("Location: index.php");
}

function conectarse($servidor,$usuarioservidor,$claveservidor,$bbdd,$puerto){
	if(!$conectado = mysqli_connect($servidor,$usuarioservidor,$claveservidor,$bbdd,$puerto)){
		echo "Algo no va bien con la base de datos";	
		exit;
	}
	else{
		//echo "conectado";
	}
	return $conectado;
}