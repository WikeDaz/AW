<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<link rel="stylesheet" href="../css/estiloRestaurante.css">
</head>


<body>
	<div class="wrap">
			<ul class ="tabs">
				<li><a href="#ini" ><span>Inicio</span></a></li>
				<li><a href="#pedi"><span>Pedidos</span></a></li>
				<li><a href="#per"><span>Perfil</span></a></li>
			
			</ul>
		</div>
		<div class="secciones">
			<article id="ini"></article>
			<h1>
			<div class ="cabecera">
				<div class="left">
				Restaurante Nombre
		  	</div>
		  	<div class="right">
				Descripcion de restaurante
		  	</div>
			
			</div>
			</h1>
			<article id="pedi"></article>
			<?php include "pedidoCliente.php";?>
			<article id="per"></article>
			<?php include "perfil.php";?>
		</div>
	
	
</body>
</html>