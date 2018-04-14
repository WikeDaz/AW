<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	
	<?php
		if(isset($_SESSION["restaurante"])){
			<li><a href="usuario.php">Inicio</a></li>
	?>
</head>

<body>
</body>
</html>