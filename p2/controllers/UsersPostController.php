<?php

class UsersPostController extends BaseController{

    private $pc;
    private $entity;

    public function __construct() {
        parent::__construct();
        require_once('models/UsersPost.php');

        $this->pc = new UsersPost();
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

    public function login() {
        $posts = $this->pc->login();

        

    }

    public function logout() {

    }


}

?>