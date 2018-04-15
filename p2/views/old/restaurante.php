
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
				<li><a href="#oferta" ><span>Oferta</span></a></li>
				<li><a href="#pedi"><span>Pedidos</span></a></li>
				<li><a href="#per"><span>Perfil</span></a></li>
			
			</ul>
		</div>
		<div class="secciones">
			<article id="oferta">
		  		<?php include "oferta.php";?>
			</article>
			<article id="pedi">
			<?php include "pedidoRestaurante.php";?>
				</article>
			<article id="per">
			<?php include "perfil.php";?>
			</article>
		</div>
	
	
	
</body>
</html>