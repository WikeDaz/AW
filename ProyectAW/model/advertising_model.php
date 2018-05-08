<?php
    class advertising_model {
        private $manager;
       
        public function __construct($i){
            $this->manager = new MongoDB\Driver\Manager("mongodb://binarybyte:27017");
        }
        
        public function insertAdMongo($type,$collection,$id){
            
            $bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);
            $document1=['id'=>"$id",'type'=>"$type",'date'=>date()];
            $_id1 = $bulk->insert($document1);
            $result = $this->manager->executeBulkWrite("madeliciosa.$collection", $bulk);
        }
        
        public function countOffersAdMongo($type,$collection,$id){
            $filter = ['type' => "$type", 'id' => "$id"];
            $options =[];
            $query = new MongoDB\Driver\Query($filter, $options);
            $rows=$this->manager->executeQuery("madeliciosa.$collection",$query);
            $res = $rows->toArray();
            return count($res);
        }

        public function getLastCookie(){
            $cmd = new MongoDB\Driver\Command([
                                              'distinct'=>'cookiesad',
                                              'key'=>'id'
                                              ]);
            $cursor = $this->manager->executeCommand('madeliciosa',$cmd);
            $scents = $cursor->toArray();
            return  count($scents[0]->values);
        }
    }
?>
