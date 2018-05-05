<?php
    echo "<form id='offer' action='updateoffer.php' method='post'>",
    "<ul>",
    "<li><img src='/ProyectAW/media/".$infooffer["ID_offer"].".jpg'/> <input type='file' name='imgfile'/></li>",
    "<li><input name='name' type='text' size='50' value='".$infooffer["name"]."' /></li>",
    "<li><textarea name='description' type='text' size='50' >".$infooffer["description"]."</textarea></li>",
    "<li><input name='price' type='text' size='50' value='".$infooffer["price"]."' /></li><li>",
    "<select name='type'>";
    foreach($matriztypesfood as $register){
            if ($register["ID"]==$register2["ID_types_food"]){
                echo "<option value='".$register["ID"]."' selected>".$register["Name"]."</option>";
            } else {
            echo "<option value='".$register["ID"]."' >".$register["Name"]."</option>";
        }
    }
    echo "</li><li><input type='submit' value='Modificar Oferta'/></li></ul>";
    ?>
