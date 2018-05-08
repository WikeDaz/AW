<div id='prin'>
<!-- OFFERS MOD VIEW -->
<form id='offer' action='updateoffer.php' method='post'>
    <ul>
    <li><img src='/ProyectAW/media/<?php echo $infooffer["ID_offer"];?>.jpg'/> <input type='file' name='imgfile'/></li>
<li><input name='name' type='text' size='50' value='<?php echo $infooffer["name"];?>' /></li>
<li><textarea name='description' type='text' size='50' ><?php echo $infooffer["description"];?></textarea></li>
<li><input name='price' type='text' size='50' value='<?php echo $infooffer["price"];?>' /></li><li>
    <select name='type'>
<?php
    foreach($matriztypesfood as $register){
            if ($register["ID"]==$register2["ID_types_food"]){
                ?>
<option value='<?php echo $register["ID"];?>' selected><?php echo $register["Name"];?></option>
            <?php } else { ?>
                <option value='<?php echo $register["ID"];?>' ><?php echo $register["Name"];?></option>
       <?php }
    } ?>
    </li><li><input type='submit' value='Modificar Oferta'/></li></ul>
</div>
