<?php
//session_set_cookie_params(200);
session_start();
if(isset($_SESSION['usuario'])){
	include_once("home.php");
}else{
echo "<!doctype html>
<html class=\"no-js\" lang=\"pt-br\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login</title>
    <link rel=\"stylesheet\" href=\"css/foundation.css\">
    <link rel=\"stylesheet\" href=\"css/app.css\">
  </head>
  <body>
	<form action=\"processa.php\" method=\"post\">
		<label>Usuário:</label>
		<br />
		<input type=\"text\" name=\"usuario\" id=\"usuario\" required placeholder=\"Usuário\" />
		<label>Senha:</label>
		<br />
		<input type=\"password\" name=\"senha\" id=\"senha\" required />
		<br />
		<input type=\"submit\" value=\"Entrar\" class=\"button success\"/>	
	</form>
  </body>
</html>";
}
?>
