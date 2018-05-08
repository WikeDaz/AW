<?php
    require_once('../../model/user_model.php');
    require_once('../../model/typesfood_model.php');


    $session = new user_model(2);
    $food = new typesfood_model(2);
    $session->initializeInfo();
    $food->initializetypesfood();
    $food->initializetypesfoodselectd();
    
    $infouser = $session->getinfo();
    if (isset($_SESSION["type_user"]) && $_SESSION["type_user"] == 1){
    $inforst = $session->getInfoRestaurant($_SESSION["ID_user"]);
    }
    $matrizvehicles = $session->getvehicles();
    $matriztypesfoodchecked = $food->gettypesfoodchecked();
    $matriztypesfood = $food->gettypesfood();
    if (isset($mod)){
        require_once('../../view/profile_mod_view.php');
    } else {
        require_once('../../view/profile_view.php');
    }
?>
