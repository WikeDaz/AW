<div id='prin'>
<div id='ofs'>
<h2><?php echo LABEL_LASTOFFERS;?></h2>
    <ul>
    <?php foreach($matrizoffers as $registro){?>
    <li><img src='/media/"<?php echo $registro["ID"];?>.jpg' /></li>
<li><a href='/ProyectAW/view/templates/offerinfo.php?ifo=<?php echo $registro["ID"]?>'><?php echo $registro["name"]?></a></li>
    <?php }?>
    </ul></div>
<div id='rst'>
<h2><?php echo LABEL_LASTRESTAURANTS;?></h2>
    <p><ul>
    <?php foreach($matrizrestaurants as $registro){?>
    <li><a href='/ProyectAW/view/templates/showRestaurant.php?id=<?php echo $registro["user_nif"]?>'><?php echo $registro["name_rst"];?></a></li>
    <?php }?>
    </ul></div>
</div>

