<?php
    echo "<!-- offer view -->"
    foreach($matrizoffers as $registro){
        echo $registro["name"];
        echo $registro["description"];
        echo $registro["price"];
    }
?>
