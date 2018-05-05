<?php
   
    class config_model {
        private $encrypted;
        private $decrypted;
        public function __construct(){
            $encrypted="";
            $decrypted="";
        }
        
        static function encrypt($input, $key = 'Clave secreta Documento de seguradad'){
            $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC), MCRYPT_DEV_URANDOM);
            
            $encrypted = base64_encode($iv .mcrypt_encrypt(MCRYPT_RIJNDAEL_128,hash('sha256', $key, true),$input,MCRYPT_MODE_CBC,$iv));
            return $encrypted;
        }
        
        static function decrypt($input, $key = 'Clave secreta Documento de seguradad'){
            $data = base64_decode($input);
            $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
            
            $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128,hash('sha256', $key, true),substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),MCRYPT_MODE_CBC,$iv),"\0");
            return $decrypted;
        }
    }
    
?>
