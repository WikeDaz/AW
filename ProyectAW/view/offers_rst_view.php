<div id='prin'>
<!-- offer RST view -->
<ul>
<?php
    foreach($matrizoffers as $infooffer){
        ?>
        <li><img src='/ProyectAW/media/".$infooffer["ID"];?>.".jpg'/></li>
            <li><?php echo $infooffer["name"];?></li>
            <li><?php echo $infooffer["description"];?></li>
            <li><?php echo $infooffer["price"];?>€</li>
            <li><?php echo $infooffer["type"];?></li>
            <li><a href='/ProyectAW/controller/offer_restaurant.php?ID=<?php echo $infooffer["ID"];?>&m=0'>Modificar oferta</a></li>
            <li><a href='/ProyectAW/controller/offer_restaurant.php?ID=<?php echo $infooffer["ID"];?>&m=1'>Eliminar oferta</a></li>
    <?php }?>
    </ul>
</div>
