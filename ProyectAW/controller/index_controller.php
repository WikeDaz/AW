<?php
    require_once('model/user_model.php');
    require_once('model/offers_model.php');
    require_once('model/typesfood_model.php');
    require_once('model/advertising_model.php');
    require_once('controller/cookie_controller.php');

    $restaurant = new user_model(0);
    $offers = new offers_model(0);
    $ad = new advertising_model(0);
    $typesfood = new typesfood_model(0);
    $cookie=new cookie_controller();
    
    $matrizIDs=array();
    $matrizTypes=array();
    $countMatrizTypes=array();
    
    if (isset($_SESSION["ID_user"])){
        $numtypes=$typesfood->getNumTypes();
        for($i=0; $i<=$numtypes; $i++){
            $matrizTypes[$i]=$ad->countOffersAd($i);
        }
        $offers->initializeOffersbyType(max($matrizTypes));
    } else if (isset($_COOKIE["cookie"])) {
        $cookie->readCookie();
    } else {
        $offers->initializeAllOffers();
        $cookie->createCookie();
    }
    
    $matrizoffers=$offers->getOffers();
    $matrizrestaurants=$restaurant->getAllRestaurants();

    require_once('view/index_view.php');
?>
