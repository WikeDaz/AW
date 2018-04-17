<?php
    require_once('model/perfil_model.php');
    $restaurant=new index_model();
    $matrizperfil=$perfil->getAllInformation();
    require_once('view/perfil_view.php');
?>
