<?php
    require_once('model/offers_model.php');
    $restaurant=new index_model();
    $matrizoffers=$offers->getAllOffers();
    require_once('view/offers_view.php');
?>
