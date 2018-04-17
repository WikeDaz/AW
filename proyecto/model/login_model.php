<?php
   
    class login_model {
        private $db;
        private $infouser;
        private $typesfoodchecked;
        private $typesfood;
        
        public function __construct(){
            require_once('../config/dbconnect.php');
            $this->db=ConnDB::getConn();
            $this->infouser = array();
            $this->typesfoodchecked = array ();
            $this->typesfood = array ();
        }
        
        public function confirmpasswd(){
            $consulta=$this->db->query("SELECT * FROM users WHERE user_nif='".$_POST["nif"]."' AND passwd='".$_POST["pass"]."'");
            $filas = $consulta-> fetch (PDO::FETCH_ASSOC);
            if($filas != null){
                session_start();
                $this->infouser= $filas;
                $_SESSION["type_user"]=$filas["type"];
                $_SESSION["ID_user"]=$filas["user_nif"];
                switch ($_SESSION["type_user"]){
                    case 1:
                        $consulta=$this->db->query("SELECT dsc_rst FROM user_rst WHERE ID_user='".$_SESSION["ID_user"]."'");
                        $filas = $consulta-> fetch (PDO::FETCH_ASSOC);
                        if($filas != null){
                            $this->infouser["dsc_rst"]=$filas["dsc_rst"];
                        }
                        $consulta=$this->db->query("SELECT ID_types_food, Name FROM typesfood, typesfoodrst WHERE ID_restaurant='".$_SESSION["ID_user"]."' AND ID_types_food = ID");
                        while (($filas = $consulta-> fetch (PDO::FETCH_ASSOC)) != null){
                               $this->typesfoodchecked[]=$filas;
                        }
                        $consulta=$this->db->query("SELECT * FROM typesfood");
                        while (($filas = $consulta-> fetch (PDO::FETCH_ASSOC)) != null){
                            $this->typesfood[]=$filas;
                        }
                        break;
                    case 2:
                        $consulta=$this->db->query("SELECT * FROM user_trs WHERE ID_user='".$_SESSION["ID_user"]."'");
                        $filas = $consulta-> fetch (PDO::FETCH_ASSOC);
                        if($filas != null){
                         //   $this->infoususer[] //add
                        }
                        break;
                }
                return $this->infouser;

            } else {
                echo "error de contraseña redirigiendo";
                header ('Refresh: 3; /aw/view/forms/login_form_view.php');
            }
        }
        
        public function gettypesfoodchecked(){
            return $this->typesfoodchecked;
        }

        public function gettypesfood(){
            return $this->typesfood;
        }
    }
    
?>
