<?php
    require_once('../model/typesfood_model.php');
    require_once('../model/offers_model.php');

    session_start();
    $offers = new offers_model(1);
    $food = new typesfood_model(1);

    $offer;
    $id=$_GET["ID"];
    $offer=$offers->getOffer($id);
    $food->initializetypesfood();
    $matriztypesfood = $food->gettypesfood();

    require_once('../view/offer_mod_view.php');
?>
