<?php
    class orders_model {
        private $db;
        
        private $state;
        private $date;
        private $id;
        private $offers;
        
        private $orders;
        
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
            $this->orders=array();
        }
        
        public function newOrder($restaurant,$client){
            $consulta=$this->db->query("INSERT INTO orders (ID_restaurant,ID_user) VALUES ('$restaurant','$client')");
            return $this->db->lastInsertId();
        }
        
        public function newLineOrder($order,$offer,$count){
            $consulta=$this->db->query("INSERT INTO lines_orders (ID_order,ID_offer,count) VALUES ($order,$offer,$count)");
            //return $consulta->fetch (PDO::FETCH_ASSOC);
        }
        
        public function initializeAllOrders(){
            $consulta=$this->db->query("SELECT * FROM orders");
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->orders[]=$filas;
            }
        }
        
        public function getLinesOrders($id){
            $consulta=$this->db->query("SELECT * FROM offers INNER JOIN lines_orders where ID_order=".$id." AND ID_offer=ID");
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->orders[]=$filas;
            }
        }
        
        public function initializeOrdersbyUser($id,$type){
            switch ($type){
                case 0:
                    $consulta=$this->db->query("SELECT ID,name_rst,ID_transport,date,state,type,total_price FROM orders, user_rst WHERE orders.ID_user='".$id."' AND orders.ID_restaurant = user_rst.ID_user");

                    break;
                case 1:
                    $consulta=$this->db->query("SELECT * FROM orders WHERE ID_restaurant='".$id."'");

                    break;
                case 2:
                    $consulta=$this->db->query("SELECT * FROM orders WHERE ID_transport='".$id."' OR state=2");

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
