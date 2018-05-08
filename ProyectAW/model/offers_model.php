<?php
    class offers_model {
        private $db;
        private $offers;
        private $types;
        
        public function __construct($i){
            switch ($i){
                case 0:
                    require_once('config/dbconnect.php');
                    break;
                case 1:
                    require_once('../config/dbconnect.php');
                    break;
                case 2:
                    require_once('../../config/dbconnect.php');
                    break;
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
        
        public function initializeAllOffersbyOrders($i){
            $this->offers=array();
            $consulta=$this->db->query("SELECT offers.name FROM lines_orders, offers where ".$i."=lines_orders.ID_order AND lines_orders.ID_offer=offers.ID");
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->offers[]=$filas;
            }
        }
        
        public function initializeAllOffers(){
            $consulta=$this->db->query("SELECT * FROM offers WHERE hidden=0 LIMIT 5");
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->offers[]=$filas;
            }
        }
        
        public function initializeOffersbyUser($id){
            $consulta=$this->db->query("SELECT * FROM offers where hidden=0 AND ID_restaurant='".$id."'");
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->offers[]=$filas;
            }
        }
        
        public function initializeOffersbyType($type){
            $consulta=$this->db->query("SELECT * FROM offers where hidden=0 AND type=".$type);
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->offers[]=$filas;
            }
        }
        
        public function updateOffer($id,$name,$description,$type,$price){
            $consulta=$this->db->query("UPDATE offers SET name='".$name."', description='".$description."', type='".$type."', price='".$price."' WHERE ID=".$id);

        }
        
        public function getOffer($i){
            $consulta=$this->db->query("SELECT * FROM offers where ID='".$i."'");
            $fila=$consulta->fetch (PDO::FETCH_ASSOC);
            return $fila;
        }
        
        public function getNameOffer($i){
            $consulta=$this->db->query("SELECT name FROM offers where ID='".$i."'");
            $fila=$consulta->fetch (PDO::FETCH_ASSOC);
            return $fila;
        }

        
        public function getRestaurantByoofer($i){
            $consulta=$this->db->query("SELECT ID_restaurant FROM offers where ID='".$i."'");
            $fila=$consulta->fetch (PDO::FETCH_ASSOC);
            return $fila["ID_restaurant"];
        }
        
        public function getType($i){
            $consulta=$this->db->query("SELECT type FROM offers where ID='".$i."'");
            $fila=$consulta->fetch (PDO::FETCH_ASSOC);
            return $fila["type"];
        }
        
        public function getOffers(){
            return $this->offers;
        }
        
        public function eraseOffer($i){
            $consulta=$this->db->query("UPDATE offers SET hidden=1 where ID='".$i."'");
        }

    }
    
?>
