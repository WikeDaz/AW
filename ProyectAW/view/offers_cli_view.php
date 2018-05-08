<!-- offer CLI view -->
<div id='prin'>
<ul>
    <?php foreach($matrizoffers as $registro){?>
<li><img src='/media/"<?php echo $registro["ID"];?>.jpg' /></li>
<li><a href='/ProyectAW/view/templates/offerinfo.php?ifo=<?php echo $registro["ID"]?>'><?php echo $registro["name"]?></a></li>
<?php }?>
    </ul>
</div>
