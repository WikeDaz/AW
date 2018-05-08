<?php
    require_once('../../controller/language_controller.php');

    require_once("../layout/library.php");
    ?>
<title>Ofertas de</title>
<meta name="description" content="Ofertas de">
</head>
<body>
<?php
    session_start();
    require_once("../layout/header.php");
    require_once('../../controller/offers_controller.php');
    require_once("../layout/footer.php");

?>

