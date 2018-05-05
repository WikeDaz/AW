<?php

class ConnDB {

    /**
     * @var null
     */
    private static $conn = NULL;

    /**
     * ConnDB constructor.
     */
 /**   public function __construct() {
        $this->conn=getConn();
    }

    /**
     *
     */
  /**  private function __clone() {

    }
**/
    public static function getConn() {
        if (!isset(self::$conn)) {
            try {
                $dbparam = require_once 'database.php';
                self::$conn = new PDO($dbparam["driver"].':host='.$dbparam["host"].';dbname='.$dbparam["database"], $dbparam["user"], $dbparam["pass"]);
                self::$conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch (Exception $e){
                die ("Error ".$e);
            }
        }
        return self::$conn;
    }
}

?>
