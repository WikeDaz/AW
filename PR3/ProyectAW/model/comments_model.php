<?php
    class comments_model {
        private $db;
        private $comments;
        public function __construct($i){
            if ($i == 0){
                require_once('../config/dbconnect.php');
            } else {
                require_once('../../config/dbconnect.php');
            }
            $this->db=ConnDB::getConn();
            $this->comments=array();
        }
        
        public function initializeAllComments(){
            $consulta=$this->db->query("SELECT * FROM comments");
            
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
                $this->comments[]=$filas;
            }
        }
        
        public function initializeCommentsByRestaurant($id){
                    $consulta=$this->db->query("SELECT * FROM comments WHERE ID_restaurant='".$id."'");
 
            while ($filas = $consulta-> fetch (PDO::FETCH_ASSOC)){
				
                $this->comments[]=$filas;
            }
        }
        
        public function getComments(){
            return $this->comments;
        }
		
		public function addComment($id,$ID_user,$comentario){		
			 $consulta=$this->db->query("INSERT INTO comments (ID_restaurant, ID_writer, comment) VALUES ('".$id."', ".$ID_user.", '".$comentario."');");
		}
    }
    
?>
