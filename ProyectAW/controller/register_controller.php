<?php
    require_once('../model/user_model.php');
    $session = new user_model(1);
    $session->registerUser();
    $session->checkUser($_POST["nif"],$_POST["passwd"]);
    header('Location: ../view/templates/perfil.php');
?>
