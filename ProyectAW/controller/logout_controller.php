<?php
    session_start();
    session_destroy();
    header('Location: /ProyectAW/index.php');
?>
