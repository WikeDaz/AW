<?php
    class offers_model {
        private $db;
        private $offers;
        private $types;
        
        public function __construct($i){
            if ($i==0){
                require_once('config/dbconnect.php');
            }else {
                require_once('../../config/dbconnect.php');
            }
            $this->db=ConnDB::getConn();
            $this->offers=array();
            $this->types=array();
        }
        
       /** public function initializeAllOffers(){
            $consulta=$this->db->query("SELECT offers.name,orders.ID FROM orders, lines_orders, offers where orders.ID= lines_orders.ID_order AND lines_orders.ID_offer=offers.ID  AND orders.ID_restaurant='".$_SESSION["ID_user"]."'");
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->offers[]=$filas;
            }
        }**/
        
        public function initializeAllOffers(){
            $consulta=$this->db->query("SELECT offers.name,orders.ID FROM orders, lines_orders, offers where orders.ID= lines_orders.ID_order AND lines_orders.ID_offer=offers.ID");
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->offers[]=$filas;
            }
        }
        
        public function initializeOffersbyUser(){
            $consulta=$this->db->query("SELECT * FROM offers where ");
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->offers[]=$filas;
            }
        }
        
        public function initializeOffersbyType($type){
            $consulta=$this->db->query("SELECT * FROM offers where type=".$type);
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->offers[]=$filas;
            }
        }
        
        public function getOffers(){
            return $this->offers;
        }

    }
    
?>
