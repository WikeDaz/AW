<?php
    require_once("layout/library.php");
    require_once("layout/header_loged.php");
   ?>
<!--PROFILE VIEW-->
    <ul><li><img src=<?php echo "/ProyectAW/media/".$_SESSION["ID_user"].".jpg"; ?>/></li>
<li><?php echo $infouser["user_name"];?></li>
<li><?php echo $infouser["user_surname"];?></li>
<li><?php echo $infouser["tel_number_user"];?></li>
<li><?php echo $infouser["user_mail"];?></li>
<li><?php echo $infouser["dir_user"];?></li>


<?php
    if(isset ($_SESSION["type_user"])){
        switch ($_SESSION["type_user"]){
            case 0:
                require_once("profile_cli_view.php");
                break;
            case 1:
                require_once("profile_rst_view.php");
                break;
            case 2:
                require_once("profile_trs_view.php");
                break;
                
        }
    }
    ?>
    <li><a href='../templates/modify_profile.php'>Modificar Perfil</a></li></ul>
<?php
    require_once("layout/footer.php");
?>
