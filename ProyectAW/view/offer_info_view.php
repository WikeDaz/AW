<?php

    echo "<!-- offer view -->";
    switch ($_SESSION["type_user"]){
        case 0:
            require_once('offers_cli_view.php');
            break;
        case 1:
            require_once('offers_rst_view.php');
            break;
    }

?>
