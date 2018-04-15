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
			<article id="ini">
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
				<table border="0">
  				<tr>
				 <td><img src="../images/img/food1.jpg"  align="left"/>Nombre<br/>Desripcion<br/><button type="submit">Add</button></td>
				 <td><img src="../images/img/food2.jpg"  align="left"/>Nombre<br/>Desripcion<br/><button type="submit">Add</button></td>
 				 </tr>
				<tr> 
					<td><img src="../images/img/food3.jpg"  align="left"/>Nombre<br/>Desripcion<br/><button type="submit">Add</button></td>
				 <td><img src="../images/img/food4.jpg"  align="left"/>Nombre<br/>Desripcion<<br/><button type="submit">Add</button></td>
					</tr>
				<tr>
					 <td><img src="../images/img/food4.jpg"  align="left"/>Nombre<br/>Desripcion<br/><button type="submit">Add</button></td>
				 <td><img src="../images/img/food5.jpg"  align="left"/>Nombre<br/>Desripcion<br/><button type="submit">Add</button></td>
					</tr>
				</table>
				
			</article>
			<article id="pedi">
				<?php include "pedidoCliente.php";?>
			</article>
			
			<article id="per">
				<?php include "perfil.php";?>
			</article>
			
		</div>
	
	
</body>
</html>