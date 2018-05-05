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
            <li><a href='/ProyectAW/controller/offer_restaurant.php?ID=<?php echo $infooffer["ID"];?>'>Modificar oferta</a></li>
            <li><a href='removeoffer.php?ID=<?php echo $infooffer["ID"];?>'>Eliminar oferta</a></li>
    <?php }?>
    </ul>

