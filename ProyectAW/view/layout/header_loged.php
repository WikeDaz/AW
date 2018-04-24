<?php echo "<!-- HEADER HTML -->"; ?>
<div class="header">
    <h1>MADELICIOSA</h1>
    <nav>
        <ul class="nav nav-justified">
<?php switch ($_SESSION["type_user"]){
    case 0:
        echo "<li><a href='/ProyectAW/index.php'>Buscar Ofertas</a></li>",
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
?>
        </ul>
    </nav>
</div>
