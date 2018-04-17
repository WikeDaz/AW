<?php
    class index_model {
        private $db;
        private $offers;
        
        public function _construct(){
            require_once('config/dbconnect.php');
            $this->db=dbconnect::getConn();
            $this->restaurants=array();
        }
        
        public function getAllOffers(){
            $consulta=$this->db->query("SELECT * FORM offers");
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->offers[]=$filas;
            }
            return $this->offers;
        }

    }
    
?>
