<?php
    require_once("layout/library.php");
    require_once("layout/header_loged.php");
    ?>
    <!-- offer MOD view -->
    <form action="/ProyectAW/controller/updates.php" method="POST">
<input name="whatmod" type="text" value="0" hidden readonly />

<input name="id" type="text" value='<?php echo $offer["ID"];?>' hidden readonly>
    <ul><li><img src='/ProyectAW/media/".$infooffer["ID"];?>.jpg'/><input type='file' name='imgfile'/></li>
    <li><input name="name" type="text" value='<?php echo $offer["name"];?>'></li>
    <li><textarea name="description"> <?php echo $offer["description"];?></textarea></li>
<li><input name="price" type="text" value='<?php echo $offer["price"];?>'></li>
<li><select name="type">
<?php
    foreach($matriztypesfood as $type){
        if($type["ID"]==$offer["type"]){
    ?>
            <option value='<?php echo $offer["type"];?>' selected><?php echo $type["Name"];?></option>
<?php } else { ?>
            <option value='<?php echo $type["ID"];?>'><?php echo $type["Name"];?></option>
        <?php }
    } ?>
</slect></li>
<li><input type="submit" value='Update Offer' /></li>
    </ul></form>
<?php
    require_once("layout/footer.php");
?>
