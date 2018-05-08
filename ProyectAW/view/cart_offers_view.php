
<!-- CART OFFER VIEW -->
    <form action='/ProyectAW/controller/buy_controller.php' method='POST'><ul>
    <?php
        $i=0;
        foreach($cartarray as $item => $key){ ?>
            <li><?php echo $offers->getNameOffer($key["i"])["name"];?><input name='<?php echo $key["i"];?>' type='number' value='<?php echo $key["c"];?>' min=0 /></li>
        <?php
            $i++;
            }
            ?>

    <li><input type="submit" value="BUY"></li></ul>

