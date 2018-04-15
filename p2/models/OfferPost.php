<?php

class OfferPost extends EntityBase {

    private $id;
    private $id_restaurant;
    private $name;
    private $price;
    private $description;
    private $img_rute;

    public function __construct() {
        $this->table = "offers";
        $class = "offers";
        parent::__construct($this->table, $class);
    }

    /**
     * @return bool|mysqli_result
     */
    public function create() {
        $key = "";
        try {
            if ($insert = $this->db()->prepare("INSERT INTO post (id, id_restaurant, name, price, description, img_rute) VALUES (?, ?, ?, ?, ?, ?)")) {
                $insert->bind_param('sssss', $this->id, $this->id_restaurant, $this->name, $this->price, $this->description, $this->img_rute);
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
    public function getIdRestaurant()
    {
        return $this->id_restaurant;
    }

    /**
     * @param mixed $author
     */
    public function setIdRestaurant($id)
    {
        $this->id_restaurant = $id;
    }

      /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $author
     */
    public function setname($name)
    {
        $this->name = $name;
    }

        /**
     * @return mixed
     */
    public function getprice()
    {
        return $this->price;
    }

    /**
     * @param mixed $author
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $author
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImage_route()
    {
        return $this->img_rute;
    }

    /**
     * @param mixed $author
     */
    public function setImage($img_route)
    {
        $this->img_rute = $img_route;
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