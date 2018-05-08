<div id='prin'>
<!-- orders view -->
<?php
    
    if (isset ($_SESSION["type_user"])){
        ?>
<table>
<?php
    
    switch ($_SESSION["type_user"]){
        case 0: //cliente
            foreach($matrizorders as $registro){
                ?>
<tr><td>
<?php echo $registro["name_rst"];?>
</td>
<?php
    
    switch ($registro["state"]){
        case 0:
        ?>
<td>Oido Cocina</td>
<?php
    break;
case 1:
    ?>
<td>Esperando al Transportista</td>
<?php
    break;
case 2:
    ?>
<td>De camino a casa</td>
<?php
    break;
case 3:
    ?>
<td>Finalizado Que aprovche!!</td>
<?php
    break;
    }
    ?>
<td><?php echo $registro["date"]; ?></td>
<td><?php echo $registro["total_price"]; ?> <a href= <?php echo "/ProyectAW/controller/summary_bill.php?Idbill=".$registro["ID"]; ?>>Ver Factura</a></td></tr>
<?php
    }
    break;
case 1: //restaurante
    $i=0;
    foreach ($matrizoffers as $order){
        ?>
        <td><ul>
<?php
        foreach($order as $offer){
            ?>
<li><?php echo $offer["name"];?></li>
<?php
        }?>
    </ul></td><td><?php echo $matrizorders[$i]["date"]; ?></td>
        <?php
        switch ($matrizorders[$i]["type"]){
            case 0:
                ?>
                <td>A Domicilio</td>
                <?php
                break;
            case 1:
                    ?>
                <td>Recoger en tienda</td>
                <?php
                break;
            case 2:
                    ?>
                <td>De camino a casa</td>
                <?php
                break;
            case 3:
                    ?>
                <td>Finalizado Que aprovche!!</td>
                <?php
                break;
        }?>
        <td><a href='aceptar.php'>Cocinar Pedido</a></td>
        <td><a href='avisar.php'>Avisar Transporte/Cliente</a></td></tr>
    <?php
        
        }
    break;
case 2: //transportista
    foreach($matrizorders as $registro){
        
        ?>
<tr><td><?php echo $registro["date"];?></td>
    <td><?php echo $user->getDir($registro["ID_restaurant"]);?></td>
    <td><?php echo $user->getDir($registro["ID_user"]);?></td>
                         <?php if ($registro["state"] == 2){ ?>
<td><a href='aceptar.php?ID="<?php echo $registro["ID"];?>"'>Aceptar Pedido</a></td>
                        <?php } else { ?>
                             <td><a href='avisar.php?ID="<?php echo $registro["ID"];?>"'>Finalizar Pedido</a></td></tr>
                        <?php }
    }
    break;
    }?>
    </table>
<?php }    ?>
</div>
