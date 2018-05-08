<?php
    require_once('../../controller/language_controller.php');

    require_once("../layout/library.php");
    ?>
<title>Ordenes de venta</title>
<meta name="description" content="Ordenes de venta de Madeliciosa">
</head>
<body>
<?php
    session_start();
    require_once("../layout/header.php");
    require_once("../../controller/orders_controller.php");
    require_once("../layout/footer.php");
?>
