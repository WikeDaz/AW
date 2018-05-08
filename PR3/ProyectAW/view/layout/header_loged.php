<!-- HEADER HTML -->
<div class="header">
    <h1>MADELICIOSA</h1>
    <nav>
        <ul class="nav nav-justified">
            <li><a href='/ProyectAW/view/templates/profile.php'>Profile</a></li>

<?php switch ($_SESSION["type_user"]){
    case 0:
    ?>
    <li><a href='/ProyectAW/index.php'>Find Offers</a></li>
<?php   if(isset($_COOKIE["cart"])){ ?>
    <li><a href='/ProyectAW/view/templates/confirmCart.php'>Finish Buy</a></li>

<?php  }   break;
    case 1:
    ?>
    <li><a href='/ProyectAW/view/templates/offers.php'>Offers</a></li>
        <?php break;
}
?>              <li><a href='/ProyectAW/view/templates/orders.php'>Orders</a></li>
                <li><a href='/ProyectAW/controller/logout_controller.php'>Logout</a></li>
        </ul>
    </nav>
</div>
