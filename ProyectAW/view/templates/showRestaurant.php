<?php
    require_once('../../controller/language_controller.php');

    require_once("../layout/library.php");
    ?>
<title>Restaurante</title>
<meta name="description" content="Perfil de">
</head>
<body>
<?php
    session_start();
    require_once("../layout/header.php");
    require_once('../../controller/offers_restaurant_controller.php');
    require_once("../layout/footer.php");

?>

