
<link rel="stylesheet" href="css/index_view.css"  type="text/css" media="all" />
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
<div id="container">
	
		 <input type="radio" name="slider-select-element" id="element1" checked="checked" />
	    <input type="radio" name="slider-select-element" id="element2" />
	    <input type="radio" name="slider-select-element" id="element3" />
	<div id="slider-container">
      <div id="slider-box">
        <div class="slider-element">
          <article class="center"> <img  src="../media/food5.jpg"/>
            <hr class="percent30">
          </article>
        </div>
        <div class="slider-element">
          <article class="center"> <img  src="../media/food2.jpg">
            <hr class="percent30">
          </article>
        </div>
        <div class="slider-element">
          <article class="center"> <img  src="../media/food4.jpg">
            <hr class="percent30">
          </article>
        </div>
      </div>
    </div>
	
	

		<div class="central">
			<ul>
		<div class="container"style="width:100%;  height:65%;">
		<div id="left">
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
	
		<div id="right" >
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
		
		
   <div id="zonaImage">
		<div id="zonaImageSup">
			 	<tr><th><img src="../media/food1.jpg" ></th><th><img src="../media/food2.jpg"></th><th><img src="../media/food3.jpg"></th></tr>
			
		</div>
		<div id="zonaImageInf">
			<tr><th><img src="../media/food4.jpg" ></th><th><img src="../media/food5.jpg"></th></tr>
			
		</div>
	</div>

	
</div>


<?php
    require_once("layout/footer.php");
?>
