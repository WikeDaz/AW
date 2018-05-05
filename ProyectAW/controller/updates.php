<?php
    session_start();
    if ($_POST["whatmod"]==0){
        require_once('../model/offers_model.php');
        $offers = new offers_model(1);
        $offers->updateOffer($_POST["id"],$_POST["name"],$_POST["description"],$_POST["type"],$_POST["price"]);
        header('Location: /ProyectAW/view/templates/offers.php');
    } else if ($_POST["whatmod"] == 1){
        require_once('../model/user_model.php');
        $users=new user_model(1);
        $users->updateProfile($_POST["name"],$_POST["surname"],$_POST["telephone"],$_POST["email"],$_POST["direction"],$_SESSION["ID_user"]);
        header('Location: /ProyectAW/view/templates/profile.php');
    }
    //require_once('../view/offer_mod_view.php');
?>
