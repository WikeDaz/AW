<?php
    require_once('../model/login_model.php');
    $session=new login_model();
    $infouser = $session->confirmpasswd();
    $matriztypesfoodchecked = $session->gettypesfoodchecked();
    $matriztypesfood = $session->gettypesfood();
    require_once('../view/perfil_view.php');
?>
