<?php

class OrderPostController extends BaseController{

    private $pc;
    private $entity;

    public function __construct() {
        parent::__construct();
        require_once('models/OrderPost.php');

        $this->pc = new orderPost();
        $this->entity = "Posts";

    }

    public function index() {
        // we store all the posts in a variable
        $posts = $this->pc->getAll();
        $this->view("index", $this->entity, array(
            "first_name" => "Estudiante",
            "last_name" => "UCM",
            "posts" => $posts
        ));
    }

    public function mostrarPedido() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id'])) {
            $this->view("error", "", array(
                "key" => "Código de Error",
                "desc" => "Descripción del Error"
            ));
        }

        $posts = $this->pc->getById($_GET['id']);
        $this->view("show", $this->entity, array(
            "posts" => $posts
        ));
    }

    /* Actualiza el estado del pedido*/
    public function actualizarPedido() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id'])) {
            $this->view("error", "", array(
                "key" => "Código de Error",
                "desc" => "Descripción del Error"
            ));
        }

        $posts = $this->pc->getById($_GET['id']);
        $this->view("show", $this->entity, array(
            "posts" => $posts
        ));
    }


}

?>