
<head>
<title>Perfil Cliente</title>
    <link rel="stylesheet" href="css/perfil_cli_view.css">
    
</head>

<body>
    <hr/>
         <?php
        <div id="center">
                
            
                 
                
                <div id="imagen">
               
                echo "<form id='perfil' action='updateperfil.php' method='post'>",
                "<ul>",
                "<li><img src='/aw/media/".$_SESSION["ID_user"].".jpg'/> <input type='file' value='/aw/media/".$_SESSION["ID_user"].".jpg'/>
                </li>"
                
                </div>
            
            
                <div id="descripcion">

                 "<form id='perfil' action='updateperfil.php' method='post'>",
                "<ul>",
                "<li><input name='name' type='text' size='50' value='".$infouser["user_name"]."' /></li>",
                "<li><input name='surname' type='text' size='50' value='".$infouser["user_surname"]."' /></li>",
                "<li><input name='telephone' type='text' size='50' value='".$infouser["tel_number_user"]."' /></li>",
                "<li><input name='email' type='text' size='50' value='".$infouser["user_mail"]."' /></li>",
                "<li><input name='direction' type='text' size='50' value='".$infouser["dir_user"]."' /></li>",
                ?>
                </div>
        
                 <div id="zona">
               "<ul> <form> 
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
                 "</select></form>",
                ?>
                </div>
        </div>
          
        <div id="footer">
                "<li><input type='submit' value='Modificar Perfil'/></li></ul>";
        </div> 
        ?>
        
        
    
         
