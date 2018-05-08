<?php
	
    require_once('../../model/comments_model.php');
	$comments = new comments_model(1);
    $comments->initializeCommentsByRestaurant($id);

    $matrizcomments = array();
    $matrizcomments=$comments->getComments();

    require_once('../../view/comments_view.php');

?>
