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
<form /*action="addoffer.php" method='post'*/>
Name:<br>
<input type="text" name="name" >
<br>
Descripcion:<br>
<input type="text" name="descripcion" >
<br>
Precio:<br>
<input type="number" name="precio">
<br>
<input type="file" id="file" style="display:none;" onchange="filechange(event)">
<img src="" width="200px" height="200px" id="img-change">
<br>
<input type="submit" value="ADD">
</form> 

<?php
    require_once("layout/footer.php");
?>