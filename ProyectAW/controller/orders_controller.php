<?php
    require_once('../../model/orders_model.php');
    require_once('../../model/offers_model.php');
    require_once('../../model/user_model.php');
    

    $orders = new orders_model(2);
    $offers = new offers_model(2);

    $orders->initializeOrdersbyUser($_SESSION["ID_user"],$_SESSION["type_user"]);
    $matrizorders = array();
    $matrizorders=$orders->getOrders();
    $matrizoffers = array();
    
    foreach($matrizorders as $register){
        $offers->initializeAllOffersbyOrders($register["ID"]);
        $matrizoffers[]=$offers->getOffers();
    }
   // $offers->initializeAllOffers();
    $user = new user_model(2);
    
    //$matrizorders=$orders->getOrders();
   // $matrizoffers=$offers->getOffers();
    
    require_once('../../view/orders_view.php');

?>
