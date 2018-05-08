<?php
    require_once('../../model/offers_model.php');
    $offers = new offers_model(2);
    require_once('../../model/user_model.php');
    $restaurant = new user_model(2);
    require_once('../../model/advertising_model.php');
    $ad = new advertising_model(2);
    require_once('../../controller/cookie_controller.php');

    $selected=$_GET["ifo"];

    
    if (isset($_SESSION["type_user"])){
        $ad->insertAd($offers->getType($selected),"advertising",$_SESSION["ID_user"]);
    } else {
        $ad->insertAd($offers->getType($selected),"cookiesAD",readCookie("cookieMadeliciosa"));
    }
    
    $offer;
    $matrizoffers;
    $inforestaurant;
    
    $offer=$offers->getOffer($selected);
    $inforestaurant=$restaurant->getInfoRestaurant($offers->getRestaurantByoofer($selected));
    $offers->initializeOffersbyUser($offers->getRestaurantByoofer($selected));
    $matrizoffers=$offers->getOffers();
    require_once('../../view/restaurant_offers_view.php');
?>
