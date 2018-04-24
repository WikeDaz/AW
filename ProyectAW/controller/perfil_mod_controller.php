<?php
    require_once('../../model/user_model.php');
    require_once('../../model/typesfood_model.php');
    $session = new user_model(2);
    $food = new typesfood_model(2);

    $session->initializeInfo();
    $infouser = $session->getinfo();
    $food->initializetypesfood();
    $food->initializetypesfoodselectd();
    
    $matriztypesfoodchecked = $food->gettypesfoodchecked();
    $matriztypesfood = $food->gettypesfood();
    require_once('../../view/perfil_mod_view.php');
?>
