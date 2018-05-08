<?php
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    switch ($lang){
        case "es":
            require_once("../translations/es_translation.php");
            break;
        case "en":
            require_once("../translations/en_translation.php");
            break;
        default:
            require_once("../translations/es_translation.php");
            break;
    }
    ?>
