<?php
    //require_once('model/advertising_model.php');

    //class cookie_controller {
        //private $ad;
        
      //  public function __construct(){
    
      //  }
    
        function createCookie($cookie, $value, $expire, $route, $domain, $security){
            setcookie($cookie, $value, $expire, $route, $domain, $security);
        }
    
        function readCookie($name){
            return $_COOKIE["$name"];
        }
    
    function deleteCookie($cookie, $value, $expire, $route, $domain, $security){
        setcookie($cookie, $value, $expire, $route, $domain, $security);
    }
    //}
?>
