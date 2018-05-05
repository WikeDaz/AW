<?php
    echo "<!-- bill view -->";
    echo "<ul>";
    foreach($matrizoffers as $infooffer){
        echo "<li>".$infooffer["name"]."</li>",
            "<li>".$infooffer["price"]."€</li>",
        "<li>X".$infooffer["count"]."</li>",
        "<li>Total: ".$infooffer["price"]*$infooffer["count"]."€</li>";
        
    }
    echo "</ul>";
?>
