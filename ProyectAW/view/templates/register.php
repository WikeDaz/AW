<?php
    require_once('../../controller/language_controller.php');

    require_once("../layout/library.php");
    ?>
<title>Registrate en Madeliciosa</title>
<meta name="description" content="Pagina de registro de Madeliciosa">
</head>
<body>
<?php
    session_start();
    require_once("../layout/header.php");
    require_once('../../view/forms/register_form_view.php');
    require_once("../layout/footer.php");

?>

