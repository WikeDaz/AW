
<?php
    require_once("layout/library.php");
    require_once("layout/header.php");
    ?>
<table>
<?php
    foreach($matrizrestaurants as $registro){
        
        echo"<tr><td>". $registro["user_name"]."</td></tr>";
		
    }
    ?>
</table>
<div class="container">
	
	<p><img src="../media/food5.jpg">aqui debe ser un slider pero como en esta practica no pide js,lo preparamos para siguiente entrega</p>
	
	
	
	<section>
		<div class="central">
			<ul>
		<div class="container"style="width:100%;  height:65%;">
		<div id="left" style="float:left ;  width:20%;  height:100%;">
		<div id="tipoComida">
		<ul>
			
			<form action="/example/html/form_action.asp" method="get">
				<p><input type="checkbox" name="styleFood" value="Arabe" /> Arabe</p>
				<p><input type="checkbox" name="styleFood" value="Asador" checked="checked" />Asador</p>
				<p><input type="checkbox" name="styleFood" value="Argentino" /> Argentino</p>
				<p><input type="checkbox" name="styleFood" value="Americano" checked="checked" />Americano</p>
				<p><input type="checkbox" name="styleFood" value="Belga" /> Belga</p>
				<p><input type="checkbox" name="styleFood" value="Spanish" checked="checked" />Spanish</p>
				<p><input type="checkbox" name="styleFood" value="China" /> China</p>
			</form>
		</ul>
		</div>
		</div>
	
		<div id="right" style="float:left ;  width:80%; height:100%;">
				<div class="search">
                    <form method="get" id="s-form" action="#" class="s-form">
                        <fieldset>
                            <input type="text" class="s_text" name="s" id="s" value="Search" onfocus="this.value=(this.value=='Search') ? '' : this.value;" onblur="this.value=(this.value=='') ? 'Search' : this.value;" />
                            <input type="submit" class="s_button" value="Buscar" id="searchsubmit" />
                        </fieldset>
                    </form>
				</div>		
		</div>
	</div>
		
		
   <div class="zonaImage">
	   <div style=" width:100px">
		<div  style=" float:left; width:50px;"><img src="../../img/food1.jpg"  width=50px height=50px/></div>
		 <div  style=" float:left; width:50px;"><img src="../../img/food2.jpg"  width=50px height=50px/></div>
		</div>
	</div>
     
		
  
    
	</section>


</div>
<?php
    require_once("layout/footer.php");
?>
