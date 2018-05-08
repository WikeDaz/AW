<?php
    require_once('../../controller/language_controller.php');

    require_once("../layout/library.php");
    ?>
<title>Oferta</title>
<meta name="description" content="oferta">
</head>
<body>
<?php
    session_start();
    require_once("../layout/header.php");
    require_once("../../controller/find_offers_controller.php");
    require_once("../layout/footer.php");

?>

