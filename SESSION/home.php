<?php
if(!isset($_SESSION['usuario'])){
	header("Location: index.php");
}else{
	echo "<!doctype html>
	<html class=\"no-js\" lang=\"pt-br\">
	  <head>
	    <meta charset=\"utf-8\">
	    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
	    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
	    <title>Home</title>
	    <link rel=\"stylesheet\" href=\"css/foundation.css\">
	    <link rel=\"stylesheet\" href=\"css/app.css\">
	  </head>
	  <body>
		<ul class=\"menu\">
			<li class=\"menu-text\"><a href=\"#\">Sisteminha</a></li>
			<li><a href=\"#\">One</a></li>
	  		<li><a href=\"#\">Two</a></li>
	  		<li><a href=\"#\">Three</a></li>
	  		<li><a href=\"#\">Four</a></li>
		</ul>
		<ul class=\"menu\" style='float: right;'>
	  		<li><a href=\"sair.php\"><i class=\"fi-user\"><span>{$_SESSION['usuario']}</span></a></li>
		</ul>
	  </body>
	</html>";
}

?>
