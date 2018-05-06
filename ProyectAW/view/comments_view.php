<?php
    echo "<!-- comments view -->";
    require_once("../layout/library.php");
    require_once("../layout/header_loged.php");
	echo "<dl>";
   foreach ($matrizcomments as $registro){
        echo "<dt>".$registro["ID_writer"]."-".$registro["tiemstamp"];      
        echo "<dd>".$registro["comment"];
    }
	if (isset($_SESSION["type_user"])){
		require_once("../forms/comment_form_view.php");
    }
	echo "</dl>";   
	require_once("../layout/footer.php");
?>
