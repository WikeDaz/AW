<?php
    session_start();
    require_once('../model/user_model.php');
    $session = new user_model(1);
    $pass = $_POST["pass"];
    $user = $_POST["nif"];
    if ($session->checkUser($user,$pass)){
        header('Location: ../view/templates/perfil.php');
    } else {
        header('Location: ../view/templates/login.php');
    }
?>
