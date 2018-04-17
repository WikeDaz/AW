<?php
    require_once('../model/register_model.php');
    $session=new register_model();
    $result = $session->registerUser();
    require_once('../view/perfil_view.php'); //???????
?>
