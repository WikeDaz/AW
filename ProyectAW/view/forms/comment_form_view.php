<div id="div-prin">
  <section class="center width100">
    <dt>Deja tu comentario
    <form id="comment" action="/ProyectAW/controller/push_comment_controller.php?id=<?php echo $_GET["id"];?>" method="post">
		
      <table class="width100">
        <tr>
          <td colspan="2"><span class="label"></span>
            <dl><input name="comentario" type="text" placeholder="comentario" size="60" required /></td>
        </tr>
        <tr>
          <td colspan="2" ><input type="submit" value="Comentar"/></td>
        </tr>
      </table>		
    </form>
  </section>
