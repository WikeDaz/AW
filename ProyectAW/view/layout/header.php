<?php echo "<!-- HEADER HTML -->"; ?>
<div class="header">
    <h1>MADELICIOSA</h1>
    <nav>
        <ul class="nav nav-justified">
		<?php if (isset($_SESSION["type_user"])){ 
		
		 switch ($_SESSION["type_user"]){
    	case 0:
        echo"<li><a href='/ProyectAW/index.php'>Indice</a></li>", 
			"<li><a href='/ProyectAW/index.php'>Buscar Ofertas</a></li>",
            "<li><a href='/ProyectAW/view/templates/orders.php'>Pedidos</a></li>",
            "<li><a href='/ProyectAW/view/templates/perfil.php'>Perfil</a></li>",
            "<li><a href='/ProyectAW/controller/logout_controller.php'>Logout</a></li>";
        break;
    	case 1:
        echo "<li><a href='/ProyectAW/view/templates/perfil.php'>Perfil</a></li>",
            "<li><a href='/ProyectAW/index.php'>Ofertas</a></li>",
            "<li><a href='/ProyectAW/view/templates/orders.php'>Pedidos</a></li>",
            "<li><a href='/ProyectAW/controller/logout_controller.php'>Logout</a></li>";
        break;
    	case 2:
        echo "<li><a href='/ProyectAW/view/templates/perfil.php'>Perfil</a></li>",
            "<li><a href='/ProyectAW/view/templates/orders.php'>Pedidos</a></li>",
            "<li><a href='/ProyectAW/controller/logout_controller.php'>Logout</a></li>";
        break;
		 }
			}else{ 
			echo "<li><a href='/ProyectAW/index.php'>Indice</a></li>
            <li><a href='/ProyectAW/view/forms/login_form_view.php'>Login</a></li>
			<li><a href='/ProyectAW/view/forms/register_form_view.php'>Registrate</a></li>
			<li><a href='/ProyectAW/view/forms/login_form_view.php'>Introduce tu restaurante</a></li>
			<li><a href='/ProyectAW/view/forms/login_form_view.php'>Trabaja con nosotros</a></li>
			<li><a href='/ProyectAW/view/templates/about.php'>About</a></li>
            <li><a href='/ProyectAW/view/templates/contact.php'>Contact</a></li>";
			} ?>
			
            
        </ul>
    </nav>
</div>
