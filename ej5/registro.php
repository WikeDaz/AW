<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<meta charset="utf-8">
	<title>Portada</title>
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		 	$("#register").click(function(){
		 	$("p").toggle();
		 });
		});
	</script>
</head>

<body>

<div id="contenedor">

	<?php 
		require("cabecera.php"); 
		require("sidebarIzq.php"); 
	?>

	<div id="contenido">
	
		<h1>Acceso al sistema</h1>

		<form action="procesarRegistro.php" method="POST">
		<fieldset>
		<legend>Usuario y contraseña</legend>
		<p><label>Email:</label> <input type="text" name="email" required/></p>
		<p><label>Name:</label> <input type="text" name="username" required/></p>
		<p><label>Password:</label> <input type="password" name="password" required/></p>
		<button type="register">Registrarse</button>
		</fieldset>

	</div>

	<?php 
		include("sidebarDer.php"); 
		include("pie.php"); 
	?>

</div> <!-- Fin del contenedor -->

</body>
</html>