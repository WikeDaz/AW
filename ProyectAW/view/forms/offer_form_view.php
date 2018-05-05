        <ul>
<form action="/ProyectAW/controller/addOffer_controller.php" method="post">

            <li><input name="name" type="text" size="25" placeholder="Nombre" required /></li>
            <li><input name="description" type="text" size="25" placeholder="Descripcion" required /></li>
            <li><input name="img" type="file" /></li>
            <li><input name="Price" type="text" size="25" placeholder="Precio" required /></li>
<li><select name="type">
<?php
    foreach($matriztypesfood as $type){?>
<option value='<?php echo $offer["type"];?>'><?php echo $type["Name"];?></option>
<?php
    } ?>
</slect></li>
<li><input type="submit" value="Añadir" /></li>
</form>

        </ul>

