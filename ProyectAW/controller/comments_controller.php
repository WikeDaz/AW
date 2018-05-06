<?php
    require_once('../../model/comments_model.php');
    //require_once('../../model/user_model.php');

    //$comments = new user_model(1);
    //$user = new user_model(2);    
    
	$comments = new comments_model(1);
    $comments->initializeCommentsByRestaurant($_GET["id"]);

    $matrizcomments = array();
    $matrizcomments=$comments->getComments();

    require_once('../../view/comments_view.php');

?>
