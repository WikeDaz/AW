<!-- HEADER HTML -->
<div class="header">
    <h1>MADELICIOSA</h1>
    <nav>
        <ul class="nav nav-justified">
            <li><a href="/ProyectAW/index.php"><?php echo LABEL_HOME;?></a></li>
<?php
        if(!isset($_SESSION["type_user"])){?>
            <li><a href="/ProyectAW/view/templates/login.php"><?php echo LABEL_LOGIN;?></a></li>
            <li><a href="/ProyectAW/view/templates/register.php"><?php echo LABEL_SIGIN;?></a></li>
            <?php
            } else { ?>
                <li><a href='/ProyectAW/controller/logout_controller.php'><?php echo LABEL_LOGOUT;?></a></li>
    <?php
        switch ($_SESSION["type_user"]){
            case 0:
            ?>
<li><a href='/ProyectAW/index.php'><?php echo LABEL_OFFERS;?></a></li>
<?php break;
case 1:
    ?>
<li><a href='/ProyectAW/view/templates/offers.php'><?php echo LABEL_OFFERS;?></a></li>
<?php break;}
    ?>
<li><a href='/ProyectAW/view/templates/orders.php'><?php echo LABEL_ORDERS;?></a></li>
        <?php    }?>
            <li><a href="/ProyectAW/view/templates/about.php"><?php echo LABEL_ABOUT;?></a></li>
<?php
            if(isset($_COOKIE["cart"])){?>
                <li><a href='/ProyectAW/view/templates/confirmCart.php'><?php echo LABEL_FINISHBUY;?></a></li>
    <?php }?>
            <li><a href="https://localhost/ProyectAW/view/templates/contact.php"><?php echo LABEL_CONTACT;?></a></li>
        </ul>
    </nav>
</div>
