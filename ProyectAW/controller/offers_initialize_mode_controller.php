<?php
    
    if (isset($_SESSION["ID_user"])){
        for($i=0; $i<=$numtypes; $i++){
            $matrizTypes[$i]=$ad->countOffersAd($_SESSION["ID_user"],$i,"advertising");
        }
        $offers->initializeOffersbyType(array_search (max($matrizTypes), $matrizTypes));
        if ($offers->getOffers()== null){
            $offers->initializeAllOffers();
        }
    } else if (isset($_COOKIE["cookieMadeliciosa"])) {
        $id=readCookie("cookieMadeliciosa");
        for($i=0; $i<=$numtypes; $i++){
            $matrizTypes[$i]=$ad->countOffersAd($id,$i,"cookiesAD");
        }
        $offers->initializeOffersbyType(array_search (max($matrizTypes), $matrizTypes));
        if ($offers->getOffers()== null){
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
    }
?>
