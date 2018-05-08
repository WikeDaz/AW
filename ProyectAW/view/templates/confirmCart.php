<?php
    require_once('../../controller/language_controller.php');

    require_once("../layout/library.php");
    ?>
<title>Finalizar Compra</title>
<meta name="description" content="Finaliza tu compra de Madeliciosa">
</head>
<body>
<?php
    session_start();
    require_once("../layout/header.php");
    require_once("../../controller/confirmCart_controller.php");
    require_once("../layout/footer.php");

?>

