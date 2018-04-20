<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Perfil Cliente</title>
	<link rel="stylesheet" href="css/perfil_cli_view.css">
</head>

<body>
	<hr/>
		
		<div id="center">
				
			
				 
				
				<div id="imagen">
				<?php
				echo "<form id='perfil' action='updateperfil.php' method='post'>",
				"<ul>",
				"<li><img src='/aw/media/".$_SESSION["ID_user"].".jpg'width="50" height="50"/> <input type='file' value='/aw/media/".$_SESSION["ID_user"].".jpg'/></li></ul>";
				?>
				</div>
			
			
				<div id="descripcion">
				<!--<ul>
				<li><h2>Nombre</h2>
			    <p>Descripciones</p></li>
				</ul>-->
				<?php
				echo "<form id='perfil' action='updateperfil.php' method='post'>",
				"<ul>",
				"<li><input name='name' type='text' size='50' value='".$infouser["user_name"]."' /></li>",
				"<li><input name='surname' type='text' size='50' value='".$infouser["user_surname"]."' /></li>",
				"<li><input name='telephone' type='text' size='50' value='".$infouser["tel_number_user"]."' /></li>",
				"<li><input name='email' type='text' size='50' value='".$infouser["user_mail"]."' /></li>",
				"<li><input name='direction' type='text' size='50' value='".$infouser["dir_user"]."' /></li></ul>";
				?>
				</div>
			
		
				<div id="tipoComida">
				<ul>
					<form action="/example/html/form_action.asp" method="get">
					  <p><input type="checkbox" name="styleFood" value="Arabe" /> Arabe</p>
					  <p><input type="checkbox" name="styleFood" value="Asador" checked="checked" />Asador</p>
					  <p><input type="checkbox" name="styleFood" value="Argentino" /> Argentino</p>
					  <p><input type="checkbox" name="styleFood" value="Americano" checked="checked" />Americano</p>
					  <p><input type="checkbox" name="styleFood" value="Belga" /> Belga</p>
				      <p><input type="checkbox" name="styleFood" value="Spanish" checked="checked" />Spanish</p>
					  <p><input type="checkbox" name="styleFood" value="China" />China</p>
				    <input type="submit" value="Submit" />
					</form>
				</ul>
				</div>
				
		
		
				<div id="zona">
				<ul>
				<form>
					<select name="zone">
					<option value="Madrid">Madrid</option>
					<option value="Leganes">Leganes</option>
					<option value="Mostoles">Mostoles</option>
					<option value="Alobendas">Alcobendas</option>
					</select>
				</form>
				</ul>
				</div>
		</div>
		  
		<div id="footer">

			<ul><li><button type="submit">Actualizar Perfil</button></li></ul>
		</div> 
		
		
	
             	
</body>
</html>
