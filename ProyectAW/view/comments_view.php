<?php
    echo "<!-- comments view -->";
    require_once("../layout/library.php");
    require_once("../layout/header_loged.php");
    
	echo "<dl>";
        foreach($matrizcomments as $registro){	
  			echo "<dt>".$registro["escritor"]."-".$registro["fecha"]."</dt>";
  			echo "<dd>".$registro["comentario"]."</dd>";			
        }
		if ($_SESSION["type_user"] == 1){
		// AÑADIR FORMULARIO, SI SOLO SI, ESTAS REGISTRADO
            echo "<dt><a href='procesarcomentario.php'>Comentar</a></dt>";
        }
		echo "</dl>";     
        echo "</table>";    
    //require_once("../layout/footer.php");
?>
