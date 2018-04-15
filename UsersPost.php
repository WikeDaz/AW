<?php

class UsersPost extends EntityBase {

    private $id;
    private $passwd;
    private $type;
    private $user_name;
    private $user_surname;
    private $user_nif;
    private $dir_user;
    private $tel_number_user;
    private $user_mail;


    public function __construct() {
        $this->table = "users";
        $class = "users";
        parent::__construct($this->table, $class);
    }

    /**
     * @return bool|mysqli_result
     */
    public function create() {
        $key = "";
        try {
            if ($insert = $this->db()->prepare("INSERT INTO post (id, passwd, type, user_name, user_surname, user_nif, dir_user, tel_number_user, user_mail) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)")) {  
                $insert->bind_param('sssss', $this->id, $this->passwd, $this->type, $this->user_name, $this->user_surname, $this->user_nif, $this->dir_user, $this->tel_number_user, $this->user_mail);

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
    public function getPasswd)
    {
        return $this->passwd;
    }

    /**
     * @param mixed $author
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
    }

      /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $author
     */
    public function setType($type)
    {
        $this->type = $type;
    }

        /**
     * @return mixed
     */
    public function getUser_name()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $author
     */
    public function setUser_name($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * @return mixed
     */
    public function getUser_surname()
    {
        return $this->user_surname;
    }

    /**
     * @param mixed $author
     */
    public function setUser_surname($user_surname)
    {
        $this->user_surname = $user_surname;
    }

    /**
     * @return mixed
     */
    public function getUser_mail()
    {
        return $this->user_mail;
    }

    /**
     * @param mixed $author
     */
    public function setUser_mail($user_mail)
    {
        $this->user_mail = $user_mail;
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