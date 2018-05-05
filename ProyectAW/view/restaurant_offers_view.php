<?php
    require_once("../layout/library.php");
    if (isset($_SESSION["ID_user"]))
    require_once("../layout/header_loged.php");
    else
    require_once("../layout/header.php");
?>
<!-- offer view -->
    
    <ul><li><?php echo $inforestaurant["name_rst"];?></li>
        <li><?php echo $inforestaurant["dsc_rst"];?></li></ul>

    <ul><li><img src='/ProyectAW/media/<?php echo $offer["ID"];?>.jpg'/></li>
        <li><?php echo $offer["name"];?></li>
        <li><?php echo $offer["description"];?></li>
        <li><?php echo $offer["price"];?>€</li>
        <li><a href='/ProyectAW/controller/addCart.php?ifo=<?php echo $offer["ID"];?>'>Añadir oferta</a></li></ul>
    
    <ul>
<?php
    foreach($matrizoffers as $infooffer){
        if($infooffer["ID"]!=$selected){ ?>
            <li><img src='/ProyectAW/media/<?php echo $infooffer["ID"];?>.jpg'/></li>
            <li><a href='/ProyectAW/view/templates/offerinfo.php?ifo=<?php echo $infooffer["ID"];?>'><?php echo $infooffer["name"];?></a></li>
        <?php }
    }?>
    </ul>

    <?php
    require_once("../layout/footer.php");
?>
