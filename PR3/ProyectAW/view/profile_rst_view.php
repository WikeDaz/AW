<!--PROFILE RST VIEW-->
<li><?php echo $inforst["name_rst"]?></li>
<li><?php echo $inforst["dsc_rst"]?></li>
<?php
    
    foreach($matriztypesfood as $register){
        $flag = FALSE;
        foreach($matriztypesfoodchecked as $register2){
            if ($register["ID"]==$register2["ID_types_food"]){
                $flag = TRUE;
            }
        }
        if ($flag){
            echo "<input type='checkbox' name='type".$register["Name"]."' value='".$register["Name"]."' checked disabled/>".$register["Name"]."<br />";
        } else {
            echo "<input type='checkbox' name='type_rst' value='".$register["Name"]."' disabled/>".$register["Name"]."<br />";
        }
    }
?>
