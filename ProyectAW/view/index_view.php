<?php
	session_start();
    require_once("layout/library.php");
    
	require_once("layout/header.php");
    echo "<h2>Últimas Ofertas Añadidas</h2>";
    echo "<p><ul>";
    foreach($matrizoffers as $registro){
        echo"<li>". $registro["name"]."</li>";
    }
    echo "</ul></p>";
    echo "<h2>Últimos Restaurantes Añadidos</h2>";
    echo "<p><ul>";
    foreach($matrizrestaurants as $registro){
        echo"<li>". $registro["user_name"]."</li>";
    }
    echo "</ul></p>";
    
    require_once("layout/footer.php");
?>
