<?php
    require_once('model/index_model.php');
    $restaurant=new index_model();
    $matrizrestaurants=$restaurant->getAllRestaurants();
    require_once('view/index_view.php');
?>
