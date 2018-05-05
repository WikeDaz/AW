<?php
   
    class user_model {
        private $db;
        private $infouser;
        private $typesfoodchecked;
        private $typesfood;
        private $vehicles;
        private $restaurants;
        
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
            $this->infouser = array();
            $this->typesfoodchecked = array ();
            $this->typesfood = array ();
            $this->vehicles = array ();
            $this->restaurants = array ();
        }
        
	public function checkUser($user,$pass){

		$consulta=$this->db->query("SELECT type,user_nif,passwd FROM users WHERE user_nif='".$user."'");

           // $consulta=$this->db->query("SELECT type,user_nif FROM users WHERE user_nif='".$user."' AND passwd='".password_verify($pass, )."'");
            $filas = $consulta-> fetch (PDO::FETCH_ASSOC);
            if($filas != null && password_verify($pass, $filas["passwd"])){
                $_SESSION["type_user"]=$filas["type"];
                $_SESSION["ID_user"]=$filas["user_nif"];
                return true;
            } else {
                return false;
            }
        }
        
        public function initializeInfo(){

            $consulta=$this->db->query("SELECT * FROM users WHERE user_nif='".$_SESSION["ID_user"]."'");
            $filas = $consulta-> fetch (PDO::FETCH_ASSOC);
            if($filas != null){
                $this->infouser = $filas;
            }
            switch ($_SESSION["type_user"]){
                case 1:
                    $consulta=$this->db->query("SELECT dsc_rst FROM user_rst WHERE ID_user='".$_SESSION["ID_user"]."'");
                    $filas = $consulta-> fetch (PDO::FETCH_ASSOC);
                    if($filas != null){
                        $this->infouser["dsc_rst"]=$filas["dsc_rst"];
                    }
                    break;
                case 2:
                    $consulta=$this->db->query("SELECT * FROM user_trs WHERE ID_user='".$_SESSION["ID_user"]."'");
                    while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                        $this->vehicles[]=$filas["vehicle"];
                    }
                    break;
            }
        }
        /**
        public function confirmpasswd(){
            $consulta=$this->db->query("SELECT type,user_nif FROM users WHERE user_nif='".$_POST["nif"]."' AND passwd='".$_POST["pass"]."'");
            $filas = $consulta-> fetch (PDO::FETCH_ASSOC);
            echo "hola";

            if($filas != null){
                echo "hola";
                $_SESSION["type_user"]=$filas["type"];
                $_SESSION["ID_user"]=$filas["user_nif"];
                return true;
            } else {
                echo "error de contraseña redirigiendo";
                return false;
            }
	}**/
        
        public function registerUser(){
            $consulta=$this->db->query("INSERT INTO users (passwd, type, user_name, user_surname, user_nif, dir_user, tel_number_user, user_mail) VALUES ('".password_hash($_POST["passwd"],PASSWORD_DEFAULT)."', ".$_POST["type"].", '".$_POST["name"]."', '".$_POST["surname"]."', '".$_POST["nif"]."', '".$_POST["direction"]."', ".$_POST["telephone"].", '".$_POST["email"]."');");
            if ($_POST["type"] != 0 && $consulta===TRUE){
                switch ($_POST["type"]){
                    case  1:
                        $consulta=$this->db->query("INSERT INTO user_rst (ID_user, dsc_rst) VALUES ('".$_POST["nif"]."', '".$_POST["description"]."');");
                        break;
                    case 2:
                        $consulta=$this->db->query("INSERT INTO user_trs (ID_user, dsc_rst) VALUES ('".$_POST["nif"]."', '".$_POST["description"]."');");
                        break;
                    }
                if($consulta===TRUE){
                    echo "Registrado correctamente";
                }
                }
            
        }
        
        public function updateProfile($name,$surname,$telephone,$email,$dir,$id){
            
            $consulta=$this->db->query("UPDATE users SET user_name='".$name."', user_surname='".$surname."', tel_number_user=$telephone, user_mail='".$email."', dir_user='".$dir."' WHERE user_nif='".$id."'");
            
          /**  if($_SESSION["type"] == 1){
                $consulta=$this->db->query("UPDATE INTO user_rst SET dsc_rst='".$_POST["description"]."' WHERE ID_user='".$_SESSION["nif"]."'");
                $filas = $consulta-> fetch (PDO::FETCH_ASSOC);
            }**/
        }
        
        public function getInfoRestaurant($id){
            $consulta=$this->db->query("SELECT name_rst,dsc_rst FROM user_rst WHERE ID_user='".$id."'");
            $filas = $consulta-> fetch (PDO::FETCH_ASSOC);
            if($filas != null){
                $infouser=$filas;
            }
            return $infouser;
        }
        
        public function getAllRestaurants(){
            $consulta=$this->db->query("SELECT * FROM users WHERE type=1");
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->restaurants[]=$filas;
            }
            return $this->restaurants;
        }
        
        public function getAllTransportsDir(){
            $consulta=$this->db->query("SELECT dir_user FROM users WHERE type=2");
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->restaurants[]=$filas;
            }
            return $this->restaurants;
        }
        
        public function getLastRestaurants(){
            $consulta=$this->db->query("SELECT * FROM users,user_rst WHERE type=1 AND ID_user=user_nif ORDER BY rd DESC LIMIT 5");
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->restaurants[]=$filas;
            }
            return $this->restaurants;
        }
        
        public function getinfo(){
            return $this->infouser;
        }
        
        public function getVehicles(){
            return $this->vehicles;
        }
        
        public function getDir($nif){
            $consulta=$this->db->query("SELECT dir_user FROM users WHERE user_nif='".$nif."'");
            $filas = $consulta-> fetch (PDO::FETCH_ASSOC);
            if($filas != null){
                return $filas["dir_user"];
            }
            return 0;
        }
    }
    
?>
