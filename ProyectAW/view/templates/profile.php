<?php
    require_once('../../controller/language_controller.php');

    require_once("../layout/library.php");
    ?>
<title>Tu Perfil</title>
<meta name="description" content="Perfil de Madeliciosa">
</head>
<body>
<?php
    session_start();
    require_once("../layout/header.php");
    require_once('../../controller/profile_controller.php');
    require_once("../layout/footer.php");

?>

