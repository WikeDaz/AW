<?php
    echo "<!-- orders view -->";
    require_once("../layout/library.php");
    require_once("../layout/header_loged.php");
    if (isset ($_SESSION["type_user"])){
        echo "<table>";
        switch ($_SESSION["type_user"]){
            case 0: //cliente
                foreach($matrizorders as $registro){
                    echo "<tr><td>".$registro["ID_restaurant"]."</td>";
                    switch ($registro["state"]){
                        case 0:
                            echo "<td>Oido Cocina</td>";
                            break;
                        case 1:
                            echo "<td>Esperando al Transportista</td>";
                            break;
                        case 2:
                            echo "<td>De camino a casa</td>";
                            break;
                        case 3:
                            echo "<td>Finalizado Que aprovche!!</td>";
                            break;
                    }
                    echo "<td>".$registro["date"]."</td>",
                    "<td>".$registro["total_price"]." <a href='verfactura.php'>Ver Factura</a></td></tr>";
                }
                break;
            case 1: //restaurante
                foreach($matrizorders as $registro){
                    echo "<tr><td><ul>";
                    foreach($matrizoffers as $registro2){
                        if ($registro2["ID"] == $registro["ID"])
                        echo "<li>".$registro2["name"]."</li>";
                    }
                    echo "</td><td>".$registro["date"]."</td>",
                    "<td>Contaor</td>";
                    switch ($registro["type"]){
                        case 0:
                            echo "<td>A Domicilio</td>";
                            break;
                        case 1:
                            echo "<td>Recoger en tienda</td>";
                            break;
                        case 2:
                            echo "<td>De camino a casa</td>";
                            break;
                        case 3:
                            echo "<td>Finalizado Que aprovche!!</td>";
                            break;
                    }
                    echo "<td><a href='aceptar.php'>Aceptar Pedido</a></td>",
                    "<td><a href='avisar.php'>Avisar Transporte/Cliente</a></td></tr>";
                }
                break;
            case 2: //transportista
                foreach($matrizorders as $registro){
                    echo "<tr><td>".$registro["date"]."</td>";
                    foreach($matrizdir as $registro2){
                       // if ($registro2["ID"]==$registro["ID"]){
                            echo "<td>".$registro2["origen"]."</td>",
                            "<td>".$registro2["destino"]."</td>";//}
                    }
                    echo "<td><a href='aceptar.php'>Aceptar Pedido</a></td>",
                    "<td><a href='avisar.php'>Actualizar Estado</a></td></tr>";
                }
                break;
        }
        echo "</table>";
    }
    require_once("../layout/footer.php");
?>
