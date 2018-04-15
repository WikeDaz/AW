<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<link rel="stylesheet" href="../css/estiloPerfil.css">
</head>

<body>
	<hr/>
		
		<div id="center"style=" width:100%;  height:85%;">
				<div id="imagen"style="float:left ;  width:40%;  height:100%;">
			<ul>
				<li><img src="../images/img/BocetosAltoNivel/Index.png" width="50" height="50"></li>  
				<li><button type="submit">Cambiar Imagen</button></li>
			
		
			</ul>
			</div>
			
			
		<div id="descripcion"style="float:left ;  width:30%;  height:100%;">
		<ul>
				<li><h2>Nombre</h2>
			    <p>Descripciones</p></li>
			</ul>
		</div>
			
		
		<div id="tipoComida"style="float:left ;  width:15%;  height:100%;">
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
				
		
		
		<div id="zona"style="float:left ;  width:15%;  height:100%;">
			<ul>
				<form>
				<select name="zone">
				<option value="Madrid">Madrid</option>
				<option value="Leganes">Leganes</option>
				<option value="Mostoles">Mostoles</option>
				<option value="Alobendas">Alcobendass</option>
				</select>
				</form>
				</ul>
		</div>
		</div>
		</div>  
            <div id="footer"style="width:100%;  height:15%;">
				
				<ul><li><button type="submit">Actualizar Perfil</button></li></ul>
			</div> 
		
		
	</div>
            
          
          
	
		
	
	
		
	
	
	
	
	
</body>
</html>