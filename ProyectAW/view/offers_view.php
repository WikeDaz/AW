<?php
    require_once("../layout/library.php");
    if (isset ($_SESSION["type_user"])){
    require_once("../layout/header_loged.php");
    echo "<!-- offer view -->";
    switch ($_SESSION["type_user"]){
        case 0:
            require_once('offers_cli_view.php');
            break;
        case 1:
            require_once('forms/offer_form_view.php');
            require_once('offers_rst_view.php');
            break;
    }
    } else {
        require_once("../layout/header.php");
        ?>
<ul><li><?php echo $inforestaurant["name_rst"];?></li>
<li><?php echo $inforestaurant["dsc_rst"];?></li></ul>


<ul>
<?php
    foreach($matrizoffers as $infooffer){
        ?>
<li><img src='/ProyectAW/media/<?php echo $infooffer["ID"];?>.jpg'/></li>
<li><a href='/ProyectAW/view/templates/offerinfo.php?ifo=<?php echo $infooffer["ID"];?>'><?php echo $infooffer["name"];?></a></li>
<?php
    }?>
</ul>

<?php
    }
    

?>
