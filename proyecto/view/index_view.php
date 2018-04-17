<?php
    require_once("layout/library.php");
    require_once("layout/header.php");
    ?>
<table>
<?php
    foreach($matrizrestaurants as $registro){
        
        echo"<tr><td>". $registro["user_name"]."</td></tr>";
    }
    ?>
</table>
<?php
    require_once("layout/footer.php");
?>
