<?php
    require_once('../../controller/language_controller.php');

    require_once("../layout/library.php");
    ?>
<title>Sobre Madeliciosa</title>
<meta name="description" content="Descripcion de Madeliciosa">
</head>
<body>
<?php
    require_once("../layout/header.php");

    session_start();

    require_once("../../controller/about.php");
    require_once("../layout/footer.php");
?>
