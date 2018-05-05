<div id="div-prin">
  <section class="center width100">
    <h2> Deja tu comentario </h2>
    <form id="comment" action="/ProyectAW/controller/comment_controller.php" method="post">
      <table class="width100">
        <tr>
          <td colspan="2"><span class="label"></span>
            <input name="comment" type="text" placeholder="comment" size="40" required /></td>
        </tr>
        <tr>
          <td colspan="2" ><input type="submit" value="Comentar"/></td>
        </tr>
      </table>
    </form>
  </section>
<?php
    require_once("../layout/footer.php");
    ?>
