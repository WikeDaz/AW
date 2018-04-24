<?php
    class orders_model {
        private $db;
        private $orders;
        
        public function __construct($i){
            if ($i == 0){
                require_once('config/dbconnect.php');
            } else {
                require_once('../../config/dbconnect.php');
            }
            $this->db=ConnDB::getConn();
            $this->orders=array();
        }
        
        public function initializeAllOrders(){
            $consulta=$this->db->query("SELECT * FROM orders");
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->orders[]=$filas;
            }
        }
        
        public function initializeOrdersbyUser(){
            switch ($_SESSION["type_user"]){
                case 0:
                    $consulta=$this->db->query("SELECT * FROM orders WHERE ID_user='".$_SESSION["ID_user"]."'");

                    break;
                case 1:
                    $consulta=$this->db->query("SELECT * FROM orders WHERE ID_restaurant='".$_SESSION["ID_user"]."'");

                    break;
                case 2:
                    $consulta=$this->db->query("SELECT * FROM orders WHERE ID_transport='".$_SESSION["ID_user"]."' OR state=1");

                    break;
            }
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->orders[]=$filas;
            }
        }
        
        public function getOrders(){
            return $this->orders;
        }
    }
    
?>
