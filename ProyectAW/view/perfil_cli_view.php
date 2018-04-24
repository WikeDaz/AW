<?php
    echo "<ul><li><img src='/ProyectAW/media/".$_SESSION["ID_user"].".jpg'/></li>",
    "<li>".$infouser["user_name"]."</li>",
    "<li>".$infouser["user_surname"]."</li>",
    "<li>".$infouser["tel_number_user"]."</li>",
    "<li>".$infouser["user_mail"]."</li>",
    "<li>".$infouser["dir_user"]."</li>",
    "<li><a href='../templates/modify_perfil.php'>Modificar Perfil</a></li></ul>";
    ?>
