<head>
    <link rel="stylesheet" href="css\header.css"  type="text/css" media="all" />
    <?php
    require_once("../layout/library.php");
    require_once("../layout/header_loged.php");
    ?>
    <title>perfil</title>
</head>
<body>
<?php
    
    if(isset ($_SESSION["type_user"])){
        switch ($_SESSION["type_user"]){
            case 0:
                require_once("perfil_cli_mod_view.php");
                break;
            case 1:
                require_once("perfil_rst_mod_view.php");
                break;
            case 2:
                require_once("perfil_trs_mod_view.php");
                break;
                
        }
    }
    require_once("../layout/footer.php");
?>
