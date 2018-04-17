<?php
    class index_model {
        private $db;
        private $restaurants;
        
        public function __construct(){
            require_once('config/dbconnect.php');
            $this->db=ConnDB::getConn();
            $this->restaurants=array();
        }
        
        public function getAllRestaurants(){
            $consulta=$this->db->query("SELECT * FROM users WHERE type=1");
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->restaurants[]=$filas;
            }
            return $this->restaurants;
        }

    }
    
?>
