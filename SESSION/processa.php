<?php

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	//setcookie('usuario',$usuario, time() + 300); -> cookie 	
	session_start();
	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	header("Location: home.php");
?>
