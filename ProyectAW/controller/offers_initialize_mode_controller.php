<?php
    $id;
    $collection;
    if (isset($_SESSION["ID_user"]) || isset($_COOKIE["cookieMadeliciosa"])){
        if (isset($_SESSION["ID_user"])){
            $id=$_SESSION["ID_user"];
            $collection="sessionad";
        } else{
            $id=readCookie("cookieMadeliciosa");
            $collection="cookiesad";
        }
        for($i=0; $i<=$numtypes; $i++){
            $matrizTypes[$i]=$ad->countOffersAdMongo($i,$collection,$id);
        }
        $offers->initializeOffersbyType(array_search (max($matrizTypes), $matrizTypes));
        if ($offers->getOffers() == null){
            $offers->initializeAllOffers();
        }
        
    } else {
        $offers->initializeAllOffers();
        $cookie="cookieMadeliciosa";
        $value=$ad->getLastCookie()+1;
        $expire=time()+3600*365;
        $route=
        $domain=
        $security=FALSE;
        createCookie($cookie,$value,$expire,$route,$domain,$security);
        $ad->insertAdMongo(-1,"cookiesad",$value);
    }
?>
