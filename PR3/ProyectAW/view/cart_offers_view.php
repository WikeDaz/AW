<?php
    require_once("../layout/library.php");
    if (isset($_SESSION["ID_user"]))
    require_once("../layout/header_loged.php");
    else
    require_once("../layout/header.php");?>
<!-- offer view -->
    <form action='/ProyectAW/controller/buy_controller.php' method='POST'><ul>
    <?php
        $i=0;
        foreach($cartarray as $item => $key){ ?>
<li><?php echo $namearray[$i]["name"];?><input name='<?php echo $key["i"];?>' type='number' value='<?php echo $key["c"];?>' min=0 /></li>
        <?php $i++;
    }?>

    <li><input type="submit" value="BUY"></li></ul>
<?php
    require_once("../layout/footer.php");

?>
