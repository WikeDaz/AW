<?php
    require_once('cookie_controller.php');

    require_once('../../model/offers_model.php');
    $offers = new offers_model(2);
    
        $cart=readCookie("cart");
        $cartarray=array();
    $namearray=array();
        $cartarray=unserialize($cart);
    foreach($cartarray as $item => $key){
     $namearray[]=$offers->getNameOffer($key["i"]);
    }
    require_once('../../view/cart_offers_view.php');

    
    //header('Location: /ProyectAW/view/templates/offerinfo.php?ifo='.$selected);
    
?>
