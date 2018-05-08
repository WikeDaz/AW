<?php
    require_once("../layout/library.php");
    require_once("../layout/header.php");
    ?>
<body>
<div id="div-prin">
  <section class="center width100">
<?php if (isset ($_GET["erno"])){
    if ($_GET["erno"]==1){
        echo "<span class='erno'>".LABEL_ISFC."</span>";
    } else if($_GET["erno"]==2){
        echo "<span class='erno'>".LABEL_UPI."</span>";
    }
}?>
    <h2> Login </h2>
    <form id="login" action="/ProyectAW/controller/login_controller.php" method="post">
      <table class="width100">
        <tr>
          <td><span class="label"></span>
            <input name="nif" type="text" size="25" placeholder="NIF" required /></td>
        </tr>
        <tr>
          <td colspan="2"><span class="label"></span>
            <input name="pass" type="password" placeholder="password" size="40" required /></td>
        </tr>
        <tr>
          <td colspan="2" ><input type="submit" value="Iniciar Sesion"/></td>
        </tr>
      </table>
    </form>
  </section>
<?php
    require_once("../layout/footer.php");
    ?>
