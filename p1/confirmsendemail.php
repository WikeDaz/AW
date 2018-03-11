<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mandar Correo a Madeliciosa</title>
<link href="index_format.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="div-prin">
  <section class="center">
	  
	  <?php
	  	$body =" Name: ".$_POST["name"]." Email: ".$_POST["email"]." Mensaje ".$_POST["bodyText"];
	  	if ($_POST["conditions"]){
	  		echo "<h1>Usted está a punto de enviar un correo</h1>";
			echo '<p>Su nombre es:'.$_POST["name"].'</p>';
			echo '<p>Su dirección:'. $_POST["email"].'</p>';
			echo '<p>Destinatario:'. $_POST["destino"].'</p>';
			echo '<p>Motivo:'. $_POST["motivo"].'</p>';
			echo '<p>Mensaje:'. $_POST["bodyText"].'</p>';
			echo '<p><a href="mailto:'.$_POST["destino"].'?subject='.$_POST["motivo"].'&amp;body='.$body.'">Enviar</a></p>';
		}
	  	else {
			echo "Lo siento debe de aceptar las condiciones para enviar el correo";
		}
	  ?>
  </section>
</div>
</body>
</html>
