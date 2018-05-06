<?php
    session_start();
    require_once('../model/comments_model.php');	
    $session = new comments_model(0);
	$session->addComment($_GET["id"],$_SESSION["ID_user"],$_POST["comentario"]);
    header('Location: ../view/templates/showRestaurant.php?id='.$_GET["id"]);
?>
