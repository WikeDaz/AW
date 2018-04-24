<?php
    require_once('../../model/user_model.php');
    require_once('../../model/typesfood_model.php');

    $session = new user_model(2);
    $food = new typesfood_model(2);
    $session->initializeInfo();
    $food->initializetypesfood();
    $food->initializetypesfoodselectd();
    
    $infouser = $session->getinfo();
    $matrizvehicles = $session->getvehicles();
    $matriztypesfoodchecked = $food->gettypesfoodchecked();
    $matriztypesfood = $food->gettypesfood();
    require_once('../../view/perfil_view.php');
?>
