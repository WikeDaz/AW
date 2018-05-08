<?php

    require_once('../model/orders_model.php');
    $orders = new orders_model(1);
    $orders->getLinesOrders($_GET["Idbill"]);
    
    
    $matrizoffers=$orders->getOrders();
    require_once('../view/bill_view.php');
?>
