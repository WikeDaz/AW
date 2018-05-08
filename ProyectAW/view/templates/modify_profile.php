<?php
    require_once('../../controller/language_controller.php');

    require_once("../layout/library.php");
    ?>
<title>Modifica tu Perfil</title>
<meta name="description" content="Moifica el perfil que ven otros usuarios">
</head>
<body>
<?php
    session_start();
    require_once("../layout/header.php");
    $mod=1;
    require_once("../../controller/profile_controller.php");
    require_once("../layout/footer.php");

?>

