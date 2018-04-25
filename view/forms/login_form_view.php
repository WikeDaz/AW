<?php
    require_once("../layout/library.php");
    require_once("../layout/header.php");
    ?>
<body>
<div id="div-prin">
  <section class="center width100">
    <h2> Logeate </h2>
    <form id="login" action="/aw/controller/login_controller.php" method="post">
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
