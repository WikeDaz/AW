<?php
    require_once('../../model/orders_model.php');
    require_once('../../model/offers_model.php');
    require_once('../../model/user_model.php');

    $orders = new orders_model(1);
    $orders->initializeOrdersbyUser();
    $offers = new offers_model(1);
    $offers->initializeAllOffers();
    $user = new user_model(2);
    
    
    $matrizorders = array();
    $matrizoffers = array();
    $matrizdir = array();
    $matrizorders=$orders->getOrders();
    $matrizoffers=$offers->getOffers();
    
    if ($_SESSION["type_user"]==2){
		foreach ($matrizorders as $registro){
			$matrizdir["ID"] = $registro["ID"];
			$matrizdir["origen"] = $user->getDir($registro["ID_restaurant"]);
			$matrizdir["destino"] = $user->getDir($registro["ID_user"]);
    	}
	}
    require_once('../../view/orders_view.php');

?>
