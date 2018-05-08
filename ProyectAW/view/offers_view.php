<!-- offer view -->
<div id='prin'>
<?php
    if (isset ($_SESSION["type_user"])){
    switch ($_SESSION["type_user"]){
        case 0:
            ?>
<div id='inforst'>
        <ul><li><?php echo $inforestaurant["name_rst"];?></li>
<li><?php echo $inforestaurant["dsc_rst"];?></li></ul>
</div>
<div id='ofrs'>

            <?php require_once('offers_cli_view.php'); ?>
                </div>
            <?php break;
        case 1: ?>
<div id='ofrs_form'>
<?php
            require_once('forms/offer_form_view.php');
?>
</div>
<div id='ofrs'>
<?php
            require_once('offers_rst_view.php');
    ?>
</div>
<?php
            break;
    }
    } else {
        ?>
<div id='inforst'>
<ul><li><?php echo $inforestaurant["name_rst"];?></li>
<li><?php echo $inforestaurant["dsc_rst"];?></li></ul>
<ul>
</div>
<div id='ofrs'>
<?php
    foreach($matrizoffers as $infooffer){
        ?>
<li><img src='/ProyectAW/media/<?php echo $infooffer["ID"];?>.jpg'/></li>
<li><a href='/ProyectAW/view/templates/offerinfo.php?ifo=<?php echo $infooffer["ID"];?>'><?php echo $infooffer["name"];?></a></li>
<?php
    }?>
</ul>
</div>
<?php
    }
    require_once("../layout/footer.php");

?>
</div>
