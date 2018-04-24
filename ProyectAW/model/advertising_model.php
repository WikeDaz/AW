<?php
    class advertising_model {
        private $db;
        
        public function __construct($i){
            if ($i == 0){
                require_once('config/dbconnect.php');
            } else {
                require_once('../../config/dbconnect.php');
            }
            $this->db=ConnDB::getConn();
        }
        
        public function insertAd($route){
            $consulta=$this->db->query("INSERT INTO advertising (ID_user,route) VALUES ('".$_SESSION["ID_user"]."','".$route."')");
        }
        
        public function countOffersAd($type){
            $consulta=$this->db->query("SELECT COUNT(*) AS total FROM advertising WHERE ID_user='".$_SESSION["ID_user"]."' AND type=$type");
            $count = $consulta-> fetch (PDO::FETCH_ASSOC);
            return $count["total"];
        }
    }
    
?>
