<?php
   
    class typesfood_model {
        private $db;
        private $typesfoodchecked;
        private $typesfood;
        
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
            $this->typesfoodchecked = array ();
            $this->typesfood = array ();
        }
        
        public function initializetypesfood(){
            $consulta=$this->db->query("SELECT * FROM typesfood");
            while (($filas = $consulta-> fetch (PDO::FETCH_ASSOC)) != null){
                $this->typesfood[]=$filas;
            }
            
        }
        public function initializetypesfoodselectd(){
            $consulta=$this->db->query("SELECT ID_types_food, Name FROM typesfood, typesfoodrst WHERE ID_restaurant='".$_SESSION["ID_user"]."' AND ID_types_food = ID");
            while (($filas = $consulta-> fetch (PDO::FETCH_ASSOC)) != null){
                $this->typesfoodchecked[]=$filas;
            }
            
        }
        
        public function getnumtypes(){
            $consulta=$this->db->query("SELECT COUNT(ID) AS total FROM typesfood");
            $count = $consulta->fetch (PDO::FETCH_ASSOC);
            
            return $count["total"];
        }

        public function gettypesfoodchecked(){
            return $this->typesfoodchecked;
        }

        public function gettypesfood(){
            return $this->typesfood;
        }
    }
    
?>
