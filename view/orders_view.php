<?php
    if (isset ($_SESSION["user_type"])){
        switch ($_SESSION["user_type"]){
            case 0: //cliente
                foreach($matrizoffers as $registro){
                    echo $registro["date"];
                    echo $registro["ID_transport"];
                    echo $registro["ID_client"];
                    echo $registro["ID_user"];
                    echo $registro["price"];
                }
                break;
            case 1: //restaurante
                foreach($matrizoffers as $registro){
                    echo $registro["date"];
                    echo $registro["ID_transport"];
                    echo $registro["ID_client"];
                    echo $registro["ID_user"];
                    echo $registro["price"];
                }
                break;
            case 2: //transportista
                foreach($matrizoffers as $registro){
                    echo $registro["date"];
                    echo $registro["ID_transport"];
                    echo $registro["ID_client"];
                    echo $registro["ID_user"];
                    echo $registro["price"];
                }
                break;
        }
    }
?>
