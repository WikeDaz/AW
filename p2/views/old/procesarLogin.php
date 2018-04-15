<?php
	session_start();

	$username = htmlspecialchars(trim(strip_tags($_REQUEST["username"])));
	$password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));

	if ($username == "cliente" && $password == "c") {
		$_SESSION["login"] = true;
		$_SESSION["nombre"] = "cliente";
		$_SESSION["esC"] = true;
	}
	else if ($username == "admin" && $password == "admin") {
		$_SESSION["login"] = true;
		$_SESSION["nombre"] = "administrador";
		$_SESSION["esA"] = true;
	}else if($username == "restaurante" && $password == "r") {
		$_SESSION["login"] = true;
		$_SESSION["nombre"] = "restaurante";
		$_SESSION["esR"] = true;
	}else if($username == "transportista" && $password == "t") {
		$_SESSION["login"] = true;
		$_SESSION["nombre"] = "transportista";
		$_SESSION["esT"] = true;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
</body>
</html>