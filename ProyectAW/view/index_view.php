	<?php
   
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    switch ($lang){
        case "es":
            require_once("translations/es_translation.php");
            break;
        case "en":
            require_once("translations/en_translation.php");
            break;
        default:
            require_once("translations/es_translation.php");
            break;
    }
    require_once("layout/library.php");
	?>
	<body>
	<div id='contenedor'>
	<?php	
    if (isset($_SESSION["ID_user"]))
    require_once("layout/header_loged.php");
    else
    require_once("layout/header.php");
	?>
	<div id='ofertas'>;
		<h2><?php echo LABEL_LASTOFFERS;?></h2>
		<p><ul>
		<?php foreach($matrizoffers as $registro){?>
		<li><img src='/media/"<?php echo $registro["ID"];?>.jpg' /></li>
		<li><a href='/ProyectAW/view/templates/offerinfo.php?ifo=<?php echo $registro["ID"]?>'><?php echo $registro["name"]?></a></li>
		<?php }?>
		</ul></p>
	</div>
	<div id='restaurantes'>;
		<h2><?php echo LABEL_LASTRESTAURANTS;?></h2>
		<p><ul>
		<?php foreach($matrizrestaurants as $registro){?>
		<li><a href='/ProyectAW/view/templates/showRestaurant.php?id=<?php echo $registro["user_nif"]?>'><?php echo $registro["name_rst"];?></a></li>
		<?php }?>
		</ul></p>
	</div>
		
	<?php
    	require_once("layout/footer.php");
	?>
	</div>
	</body>
	
