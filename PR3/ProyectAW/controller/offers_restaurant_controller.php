<?php
    require_once('../../model/offers_model.php');
    require_once('../../model/user_model.php');

    $offers = new offers_model(2);
    $users = new user_model(2);
    $matrizoffers;
    $id=$_GET["id"];
    $inforestaurant=$users->getInfoRestaurant($id);
    $offers->initializeOffersbyUser($id);
    $matrizoffers=$offers->getOffers();
    require_once('../../view/offers_view.php');
?>
