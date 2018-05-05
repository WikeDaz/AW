<!-- offer CLI view -->
<ul>
<?php
    foreach($matrizoffers as $infooffer){ ?>
<li><a href='showanoffer.php?ID=".$infooffer["ID"]."'><img src='/ProyectAW/media/<?php echo $infooffer["ID"];?>.jpg'/></a></li>
        <li><?php echo $infooffer["name"];?></li>
        <li><?php echo $infooffer["price"];?></li>
        <li><a href='/ProyectAW/controller/addCart.php?ifo=<?php echo $infooffer['ID'];?>'>Añadir oferta</a></li>
    <?php }?>
    </ul>

