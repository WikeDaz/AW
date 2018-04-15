<?php echo "<!-- HEADER HTML -->" ?>
<div class="header">      
		
    <nav>
		<h1><a href="/aw/p2/index.php">MADELICIOSA</a></h1>
        <ul class="nav nav-justified">        
            <li><a href="/aw/p2/views/registro.php">Añade tu restaurante</a></li>
            <li><a href="/aw/p2/views/registro.php">Reparte con nosotros</a></li>
			<?php if (!isset($_SESSION["login"])){ 
				echo "<li><a href='/aw/p2/views/login.php'>Entrar/Registro</a></li>";
			 }else{  
				echo "<li><p>{$_SESSION['name']} </p><a href='/aw/p2/views/logout.php'>Logout</a></li>";
			 } ?>
			<li><a href="#">Contacto</li>
        </ul>
    </nav>
</div>