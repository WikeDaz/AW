
<head>
	<link rel="stylesheet" href="css\offers_view.css"  type="text/css" media="all" />
	<?php
	require_once("layout/library.php");
	?>
	<title>Index</title>
</head>
<body>
<?php
    require_once("layout/header.php");
    ?>


<?php
foreach($matrizoffers as $registro){
	<table id="big">
		<tr><th>
		<table id="s">
		<tr><th>Imagen</th><th>titulo</th><th>Descripcion</th><th >Precio Unidad</th></tr>
		<tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th>echo $registro["price"] /> </th></tr>
		 <tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th>echo $registro["price"] /> </th></tr>
		 <tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th>echo $registro["price"] /> </th></tr>
		 <tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th>echo $registro["price"] /> </th></tr>
		 <tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th>echo $registro["price"] /> </th></tr>
		 <tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th>echo $registro["price"] /> </th></tr>
		 <tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th>echo $registro["price"] /> </th></tr>
		 <tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th>echo $registro["price"] /> </th></tr>

		</table>
	}
?>
		</th>
		<th>
		<table id="i" >
			 <?php
            echo "</ul><li><a href='offers_view_mod.php'>Actualizar oferta</a></li></ul>";
            echo"</ul><li><a href='add_offer_view_mod.php'>Add oferta</a></li></ul>";
            ?>
		</table>
	</th>
	
	</table>

<?php
    require_once("layout/footer.php");
?>