<?php

class OrderPost extends EntityBase {

    private $id;
    private $id_offers;
    private $id_transport;
    private $id_client;
    private $id_user;
    private $fecha;

    public function __construct() {
        $this->table = "orders";
        $class = "orders";
        parent::__construct($this->table, $class);
    }

    /**
     * @return bool|mysqli_result
     */
    public function create() {
        $key = "";
        try {
            if ($insert = $this->db()->prepare("INSERT INTO post (id, id_offers, id_transport, id_client, id_user, fecha) VALUES (?, ?, ?, ?, ?, ?)")) {
                $insert->bind_param('sssss', $this->id, $this->id_offers, $this->id_transport, $this->id_client, $this->id_user, $this->fecha);
                if (!$insert->execute()) {
                    $key = "901"; //Codigo Error/Informacion "El registro no se ha podido crear correctamente"
                } else {
                    $key = "100"; //Codigo Error/Informacion "Registro creado correctamente"
                }
            } else {
                $key = $this->db()->error; //Codigo Error/Informacion "Error directo de base de datos"
            }
        } catch (Exception $e) {
            header('Location: ../error.php?err=' . $e->getMessage() . "\n");
        }
        return $key;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId_offers()
    {
        return $this->id_offers;
    }

    /**
     * @param mixed $author
     */
    public function setId_offers($id)
    {
        $this->id_offers = $id;
    }

      /**
     * @return mixed
     */
    public function getId_transport()
    {
        return $this->id_transport;
    }

    /**
     * @param mixed $author
     */
    public function setId_transport($id)
    {
        $this->id_transport = $id;
    }

        /**
     * @return mixed
     */
    public function getId_client()
    {
        return $this->id_client;
    }

    /**
     * @param mixed $author
     */
    public function setId_client($id)
    {
        $this->id_client = $id;
    }

    /**
     * @return mixed
     */
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $author
     */
    public function setId_user($id)
    {
        $this->id_user = $id;
    }

    /**
     * @return mixed
     */
    public function getFecha)
    {
        return $this->fecha;
    }

    /**
     * @param mixed $author
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param string $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }

}
?>