<?php
   
    class register_model {
        private $db;
        
        public function __construct(){
            require_once('../config/dbconnect.php');
            $this->db=ConnDB::getConn();
        }
        
        public function registerUser(){
            $consulta=$this->db->query("INSERT INTO 'users' ('passwd', 'type', 'user_name', 'user_surname', 'user_nif', 'dir_user', 'tel_number_user', 'user_mail') VALUES ('".$_POST["passwd"]."', '".$_POST["type"]."', '".$_POST["name"]."', '".$_POST["surname"]."', '".$_POST["nif"]."', '".$_POST["direction"]."', '".$_POST["telephone"]."', '".$_POST["email"]."');");
            $filas = $consulta-> fetch (PDO::FETCH_ASSOC);
            if ($_POST["type"] != 0){
                switch ($_SESSION["type_user"]){
                    case  1:
                        $consulta=$this->db->query("INSERT INTO 'user_rst' ('ID_user', 'dsc_rst') VALUES ('".$_POST["nif"]."', '".$_POST["description"]."');");
                        $filas = $consulta-> fetch (PDO::FETCH_ASSOC);
                        break;
                    case 2:
                        $consulta=$this->db->query("INSERT INTO 'user_trs' ('ID_user', 'dsc_rst') VALUES ('".$_POST["nif"]."', '".$_POST["description"]."');");
                        $filas = $consulta-> fetch (PDO::FETCH_ASSOC);
                        break;
                }
            }
        }

    }
    
?>
