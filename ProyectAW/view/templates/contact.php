<?php
    require_once('../../controller/language_controller.php');

    require_once("../layout/library.php");
    ?>
<title>Contacta</title>
<meta name="description" content="Página de contacto de Madeliciosa">
</head>
<body>
<?php
    session_start();
    require_once("../layout/header.php");
    require_once("../contact.php");
    require_once("../layout/footer.php");

?>

