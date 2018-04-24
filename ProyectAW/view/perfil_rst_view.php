<?php
    echo "<ul><li><img src='/ProyectAW/media/".$_SESSION["ID_user"].".jpg'/></li>",
    "<li>".$infouser["user_name"]."</li>",
    "<li>".$infouser["user_surname"]."</li>",
    "<li>".$infouser["tel_number_user"]."</li>",
    "<li>".$infouser["dsc_rst"]."</li>",
    "<li>".$infouser["user_mail"]."</li>",
    "<li>".$infouser["dir_user"]."</li><li>";
    foreach($matriztypesfood as $register){
        $flag = FALSE;
        foreach($matriztypesfoodchecked as $register2){
            if ($register["ID"]==$register2["ID_types_food"]){
                $flag = TRUE;
            }
        }
        if ($flag){
            echo "<input type='checkbox' name='type".$register["Name"]."' value='".$register["Name"]."' checked disabled/>".$register["Name"]."<br />";
        } else {
            echo "<input type='checkbox' name='type_rst' value='".$register["Name"]."' disabled/>".$register["Name"]."<br />";
        }
    }
    echo "</li><li><a href='../templates/modify_perfil.php'>Modificar Perfil</a></li></ul>";
    ?>
