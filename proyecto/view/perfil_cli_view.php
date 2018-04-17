<?php
    echo "<form id='perfil' action='updateperfil.php' method='post'>",
    "<ul>",
    "<li><img src='/aw/media/".$_SESSION["ID_user"].".jpg'/> <input type='file' value='/aw/media/".$_SESSION["ID_user"].".jpg'/></li>",
    "<li><input name='name' type='text' size='50' value='".$infouser["user_name"]."' /></li>",
    "<li><input name='surname' type='text' size='50' value='".$infouser["user_surname"]."' /></li>",
    "<li><input name='telephone' type='text' size='50' value='".$infouser["tel_number_user"]."' /></li>",
    "<li><input name='email' type='text' size='50' value='".$infouser["user_mail"]."' /></li>",
    "<li><input name='direction' type='text' size='50' value='".$infouser["dir_user"]."' /></li></ul>";
    ?>
