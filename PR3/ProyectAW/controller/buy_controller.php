<?php
    require_once('cookie_controller.php');

    require_once('../model/offers_model.php');
    require_once('../model/orders_model.php');
    $offers = new offers_model(1);
    $orders = new orders_model(1);
    session_start();
    if (isset($_COOKIE["cart"]) && isset($_SESSION["ID_user"])){
        $cart=readCookie("cart");
        $cartarray=array();
        $cartarray=unserialize($cart);
        $lastrestaurant=null;
        foreach($cartarray as $item => $key){
            if ($_POST[$key["i"]] !=0){
            $restaurant=$offers->getRestaurantByoofer($key["i"]);
            if ($lastrestaurant != $restaurant){
                $order=$orders->newOrder($restaurant,$_SESSION["ID_user"]);
            }
            $orders->newLineOrder($order,$key["i"],$_POST[$key["i"]]);
            $lastrestaurant=$restaurant;
            }
        }
        $expire=time()-1;
        $route="/ProyectAW";
        $domain="localhost";
        $security=FALSE;
        createCookie("cart","",$expire,$route,$domain,$security);
        header('Location: /ProyectAW/view/templates/orders.php');
    } else {
        header('Location: /ProyectAW/view/templates/login.php?erno=1');
    }
?>
