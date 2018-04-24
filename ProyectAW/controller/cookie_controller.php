<?php
    class cookie_controller {
        
        public function __construct(){
        }
        
        public function createCookie(){
            $cookie="cookie";
            $value=365;
            $expire=time()+3600*365;
            $route=
            $domain=
            $security=FALSE;
            setcookie($cookie, $value, $expire, $route, $domain, $security);
        }
        
        public function readCookie(){
            if (isset($_COOKIE["cookie"])) {
            } else {
                
            }
        }
    }
?>
