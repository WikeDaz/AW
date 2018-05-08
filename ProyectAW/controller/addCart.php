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
            $cartarrayupdated[]=array("i"=>(int)$key["i"],"c"=>$key["c"]);
        }
        if (!$flag){
            $cartarrayupdated[]=array("i"=>(int)$selected, "c"=>1);
        }
        $cartarray=$cartarrayupdated;
        var_dump($cartarray);
    } else {
        $cartarray[]=array("i"=>(int)$selected, "c"=>1);
        var_dump($cartarray);
    }
    $value=serialize($cartarray);
    var_dump ($value);
    $expire=(time()+3600*12);
    $route="/ProyectAW";
    $domain=
    $security=FALSE;
    createCookie("cart",$value,$expire,$route,$domain,$security);
    header('Location: /ProyectAW/view/templates/offerinfo.php?ifo='.$selected);
    
?>
