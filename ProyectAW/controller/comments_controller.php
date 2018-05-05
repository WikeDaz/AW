<?php
    require_once('../../model/comments_model.php');
    //require_once('../../model/user_model.php');

    //$comments = new user_model(1);
    //$user = new user_model(2);    
    
	$comments = new comments_model(1);
    $comments->initializeCommentsByRestaurant(getDir($registro["ID_restaurant"]));

    $matrizcomments = array();
    $matrizdir = array();
    $matrizcomments=$comments->getComments();
 
    foreach ($matrizcomments as $registro){
        $matrizdir["restaurante"] = $user->getDir($registro["ID_restaurant"]);
        $matrizdir["escritor"] = $user->getDir($registro["ID_escritor"]);
        $matrizdir["comentario"] = $registro["comment"];
		$matrizdir["fecha"] = $registro["timestamp"];
    }
    require_once('../../view/comments_view.php');

?>
