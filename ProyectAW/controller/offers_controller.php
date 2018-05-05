<?php
    require_once('../../model/offers_model.php');
    require_once('../../model/typesfood_model.php');

    $offers = new offers_model(2);
    $food = new typesfood_model(2);
    
    $food->initializetypesfood();
    $matriztypesfood = $food->gettypesfood();

    $matrizoffers=array();
    switch ($_SESSION["type_user"]){
        case 0:
            require_once('offers_initialize_mode_controller.php');

            break;
        case 1:
            $offers->initializeOffersbyUser($_SESSION["ID_user"]);
            break;
        case 2:
            break;
    }
    $matrizoffers=$offers->getOffers();
    
        require_once('../../view/offers_view.php');

?>
