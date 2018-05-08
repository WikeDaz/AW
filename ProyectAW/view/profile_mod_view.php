<div id='prin'>
<!--PROFILE MOD VIEW-->
<form id='perfil' action='/ProyectAW/controller/updates.php' method='post'>
<ul>
<input name="whatmod" type="text" value="1" hidden readonly />
<li><img src='<?php echo "/ProyectAW/media/".$_SESSION["ID_user"].".jpg";?>'/> <input type='file' name='imgfile'/></li>
<li><input name='name' type='text' size='50' value='<?php echo $infouser["user_name"];?>' /></li>
<li><input name='surname' type='text' size='50' value='<?php echo $infouser["user_surname"];?>' /></li>
<li><input name='telephone' type='text' size='50' value='<?php echo $infouser["tel_number_user"];?>' /></li>
<li><input name='email' type='text' size='50' value='<?php echo $infouser["user_mail"];?>' /></li>
<li><input name='direction' type='text' size='50' value='<?php echo $infouser["dir_user"];?>' /></li>


<?php
    if(isset ($_SESSION["type_user"])){
        switch ($_SESSION["type_user"]){
            case 0:
                require_once("profile_cli_mod_view.php");
                break;
            case 1:
                require_once("profile_rst_mod_view.php");
                break;
            case 2:
                require_once("profile_trs_mod_view.php");
                break;
                
        }
    }
    ?>
<li><input type='submit' value='Modificar Perfil'/></li></ul>
</div>
