

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Perfil Cliente</title>
    <link rel="stylesheet" href="css/perfil_rst_view.css">
</head>

<body>
    <hr/>
         <?php
         echo" <div id="center">",
                
            
                 
                
               echo" <div id="imagen">",
               
                echo "<form id='perfil' action='updateperfil.php' method='post'>",
                "<ul>",
                "<li><img src='/aw/media/".$_SESSION["ID_user"].".jpg'/> <input type='file' value='/aw/media/".$_SESSION["ID_user"].".jpg'/>
                </li></ul>",
                
                echo "</div>",
            
            
                echo"<div id="descripcion">",

                echo "<form id='perfil' action='updateperfil.php' method='post'>",
                "<ul>",
                "<li><input name='name' type='text' size='50' value='".$infouser["user_name"]."' /></li>",
                "<li><input name='surname' type='text' size='50' value='".$infouser["user_surname"]."' /></li>",
                "<li><input name='telephone' type='text' size='50' value='".$infouser["tel_number_user"]."' /></li>",
                "<li><textarea name='description' type='text' size='50' >".$infouser["dsc_rst"]."</textarea></li>",
                "<li><input name='email' type='text' size='50' value='".$infouser["user_mail"]."' /></li>",
                "<li><input name='direction' type='text' size='50' value='".$infouser["dir_user"]."' /></li><li></ul>",
                echo"</div>",
            
        
                echo"<div id="tipoComida">",  
                 echo"<ul> <form>",
                foreach($matriztypesfood as $register){
                    $flag = FALSE;
                    foreach($matriztypesfoodchecked as $register2){
                        if ($register["ID"]==$register2["ID_types_food"]){
                            $flag = TRUE;
                        }
                    }
                    if ($flag){
                        echo "<input type='checkbox' name='type".$register["Name"]."' value='".$register["Name"]."' checked/>".$register["Name"]."<br />";
                    } else {
                        echo "<input type='checkbox' name='type_rst' value='".$register["Name"]."' />".$register["Name"]."<br />";
                    }
                }
                echo "</form></ul>",
               echo" </div>",
                 
        
        
                echo"<div id="zona">",
                 echo"<ul> <form> 
                    <select name="zone">",
                foreach($matrizzone as $register){
                    $flag = FALSE;
                    foreach($matrizzonechecked as $register2){
                        if ($register["ID"]==$register2["ID_types_food"]){
                            $flag = TRUE;
                        }
                    }
                    if ($flag){
                         echo " <option value='".$register["Name"]."' seleted="selected"/>".$register["Name"]."<br />";

                    } else {
                        echo " <option value='".$register["Name"]."' />".$register["Name"]."<br />";
                    }
                }
                echo "</select></form></ul>";
             
               echo" </div>",
       echo" </div>",
          
        echo"<div id="footer">",

            echo"<ul><li><input type="submit" value="Actualizar Perfil"></li></ul>",
       echo" </div> </form> ";
       ?>
        
        
    
                
</body>
</html>

