<?php
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    switch ($lang){
        case "es":
            require_once("view/translations/es_translation.php");
            break;
        case "en":
            require_once("view/translations/en_translation.php");
            break;
        default:
            require_once("view/translations/es_translation.php");
            break;
    }
    
    require_once("view/layout/library.php");
    ?>
<title><?php echo LABEL_WELLCOME_TITLE;?></title>
<meta name="description" content='<?php echo LABEL_WELLCOME_DESCRIPTION;?>'>
</head>
<body>
<?php
    session_start();
    require_once("view/layout/header.php");
    require_once('config/dbconnect.php');
    require_once('controller/index_controller.php');
    require_once("view/layout/footer.php");
?>
