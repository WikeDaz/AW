<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimun-sale=1.0">
	<title>MADELICIOSA</title>
	<link rel="stylesheet" href="../css/estiloUsuario.css">
	
	</head>
	<h1>MADELICIOSA</h1>
	<hr/>
	<body>
		<div id="contenido">
		<?php
		if(isset($_SESSION["esR"])){
		<?php include "restaurante.php";?>
		}else if(isset($_SESSION["esT"])){
		<?php include "transportista.php";?>}
		else if(isser($_SESSION["esC"])){
		<?php include "cliente.php";?>
		}
		?>
		</div>
	</body>
	