<?php session_start(); 

	$_SESSION["login"] = true;
	$_SESSION["name"] = 'Cliente';
	$_SESSION["tipo"] = "Cliente";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Portada</title>
</head>
	
<body>

<div id="contenedor">

 	<?php require ('layout/header.php'); ?>
	
	<div id="contenido">
		<h1>Acceso al sistema</h1>
		<form action="procesarLogin.php" method="POST">
		<fieldset>
		<legend>Usuario y contraseña</legend>
		<p><label>Name:</label> <input type="text" name="username" /></p>
		<p><label>Password:</label> <input type="password" name="password" /><br /></p>
		<button type="submit">Entrar</button>
		</fieldset>
		<a href="registro.php">Nuevo usuario</a>
	</div>
	
	<?php require ('footer.php'); ?>

</div>

</body>
</html>