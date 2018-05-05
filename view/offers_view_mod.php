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
	 echo "<form id='offer' action='updateoffer.php' method='post'>";
	<table id="big">
		<tr><th>
		<table id="s">
		<tr><th>Imagen</th><th>titulo</th><th>Descripcion</th><th >Precio Unidad</th></tr>
		<tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th><input type="number" value =echo $registro["price"] step="1" min="1" max="1000"/> </th></tr>
		 <tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th><input type="number" value =echo $registro["price"] step="1" min="1" max="1000"/> </th></tr>
		 <tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th><input type="number" value =echo $registro["price"] step="1" min="1" max="1000"/> </th></tr>
		 <tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th><input type="number" value =echo $registro["price"] step="1" min="1" max="1000"/> </th></tr>
		 <tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th><input type="number" value =echo $registro["price"] step="1" min="1" max="1000"/> </th></tr>
		 <tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th><input type="number" value =echo $registro["price"] step="1" min="1" max="1000"/> </th></tr>
		 <tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th><input type="number" value =echo $registro["price"] step="1" min="1" max="1000"/> </th></tr>
		 <tr><th><img src="../images/img/food1.jpg"></th><th>echo $registro["name"]</th><th>echo $registro["description"]</th><th><input type="number" value =echo $registro["price"] step="1" min="1" max="1000"/> </th></tr>

		</table>
	}
?>
		</th>
		<th>
		<table id="i" >
			<?php
			<tr><th>echo"<ul><li><input type='submit' value='Actualizar oferta'/></li></ul>";
            echo "</form>"; </th></tr>
			 
			 ?>
		</table>
	</th>
	
	</table>

<?php
    require_once("layout/footer.php");
?>