<?php
    echo "<form id='perfil' action='updateperfil.php' method='post'>",
    "<ul>",
    "<li><img src='/ProyectAW/media/".$_SESSION["ID_user"].".jpg'/> <input type='file' name='imgfile'/></li>",
    "<li><input name='name' type='text' size='50' value='".$infouser["user_name"]."' /></li>",
    "<li><input name='surname' type='text' size='50' value='".$infouser["user_surname"]."' /></li>",
    "<li><input name='telephone' type='text' size='50' value='".$infouser["tel_number_user"]."' /></li>",
    "<li><textarea name='description' type='text' size='50' >".$infouser["dsc_rst"]."</textarea></li>",
    "<li><input name='email' type='text' size='50' value='".$infouser["user_mail"]."' /></li>",
    "<li><input name='direction' type='text' size='50' value='".$infouser["dir_user"]."' /></li><li>";
    foreach($matriztypesfood as $register){
        $flag = FALSE;
        foreach($matriztypesfoodchecked as $register2){
            if ($register["ID"]==$register2["ID_types_food"]){
                $flag = TRUE;
            }
        }
        if ($flag){
            echo "<input type='checkbox' name='type".$register["Name"]."' value='".$register["Name"]."' checked/>".$register["Name"]."<br />";
        } else {
            echo "<input type='checkbox' name='type_rst' value='".$register["Name"]."' />".$register["Name"]."<br />";
        }
    }
    echo "</li><li><input type='submit' value='Modificar Perfil'/></li></ul>";
    ?>
