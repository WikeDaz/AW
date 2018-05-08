<?php
    require_once('cookie_controller.php');

    $selected=$_GET["ifo"];

    $cookie="cart";
    if (isset($_COOKIE["cart"])){
        $cart=readCookie("cart");
        $cartarray=array();
        $cartarray=unserialize($cart);
        $cartarrayupdated=array();
        $flag=false;
        foreach($cartarray as $item => $key){
            if($key["i"]==$selected){
                $key["c"]+=1;
                $flag=true;
            }
            $cartarrayupdated[]=array("i"=>$key["i"],"c"=>$key["c"]);
        }
        if (!$flag){
            $cartarrayupdated[]=array("i"=>$selected, "c"=>1);
        }
        $cartarray=$cartarrayupdated;
    } else {
        $cartarrayupdated[]=array("i"=>$selected, "c"=>1);
        $cartarray=$cartarrayupdated;
    }
    $value=serialize($cartarray);

    $expire=time()+3600*365;
    $route="/ProyectAW";
    $domain="localhost";
    $security=FALSE;
    createCookie($cookie,$value,$expire,$route,$domain,$security);
    header('Location: /ProyectAW/view/templates/offerinfo.php?ifo='.$selected);
    
?>
