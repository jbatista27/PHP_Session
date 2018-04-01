<?php
session_start();
	if(!isset($_SESSION['usuario'])){
		header("Location: index.php");
	}else{
		//setcookie('usuario',null);
		session_destroy();
		header("Location: index.php");
	}	
?>
