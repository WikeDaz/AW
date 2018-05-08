<?php
    class advertising_model {
        private $db;
        
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
        }
        
        public function insertAdMongo($type,$collection,$id){
            $db="madeliciosa";
            $collection="sessionad";
            $cliente = new MongoDB\DriverMongoDB\Client("mongodb://localhost:27017");
            //\Client("mongodb://localhost:27017");
            $col = $m->selectCollection($db,$collection);
            $ad=array("id"=>"$id","type"=>"$type","date"=>date);
            
            // Si se usa un array literal, no hay forma de acceder al _id generado
            $col->insert($ad);
        }
        
        public function insertAd($type,$table,$id){
                $consulta=$this->db->query("INSERT INTO ".$table." (ID,type) VALUES ('".$id."',".$type.")");
        }
        
        public function countOffersAd($id,$type,$table){
            $consulta=$this->db->query("SELECT COUNT(*) AS total FROM ".$table." WHERE ID='".$id."' AND type=".$type);
            $count = $consulta-> fetch (PDO::FETCH_ASSOC);
            return $count["total"];
        }
        
      /**  public function countOffersAdCookie($id,$type){
            $consulta=$this->db->query("SELECT COUNT(*) AS total FROM cookiesAD WHERE ID='$id' AND type=$type");
            $count = $consulta-> fetch (PDO::FETCH_ASSOC);
            return $count["total"];
        }**/
        
        public function getLastCookie(){
            $consulta=$this->db->query("SELECT MAX(ID) FROM cookiesAD");
            $count = $consulta-> fetch (PDO::FETCH_ASSOC);
            return $count["MAX(ID)"];
        }
    }
    
?>
