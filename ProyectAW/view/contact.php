<?php
    require_once("../layout/library.php");
    require_once("../layout/header.php");
    ?>
<body>
<div id="div-prin">
  <section class="center width100">
    <h2> Contacto </h2>
    <p>¿Quiere dejarnos un comentario? rellene el formulario, nuestro equipo de expertos le responderá ASAP</p>
    <form id="contacto" action="confirmsendemail.php" method="post">
      <table id="submitInfo" class="width100">
        <tr>
          <td><span class="label"></span>
            <input name="name" type="text" size="50" placeholder="name" required /></td>
        </tr>
        <tr>
          <td colspan="2"><span class="label"></span>
            <input name="email" type="text" size="50" placeholder="E-mail" required /></td>
        </tr>
        <tr>
          <td>Motivo de la consulta:</td>
        </tr>
        <tr >
          <td><input type="radio" name="motivo" value="evaluation" checked/>
            Evaluación <br>
            <input type="radio" name="motivo" value="suggestion" />
            Sugerencias <br>
            <input type="radio" name="motivo" value="critics" />
            Críticas <br></td>
        </tr>
		  <tr>
          <td>¿A quién quiere mandar el correo?<select name="destino"><option value="colano@ucm.es">Carlos Olano</option><option value="yuyaolin@ucm.es">Yuyao Lin</option><option value="">Enrique Román</option></select></td>
        </tr>
		  <tr>
          <td colspan="2" >
            <textarea name="bodyText" rows="20" cols="100" placeholder="Escriba aqui su pregunta/consulta"></textarea></td>
        </tr>
        <tr>
          <td><input type="checkbox" name="conditions" required/>
            He leido y acepto <a href="terms.html">nuestros terminos y condiciones</a>.</td>
        </tr>
        
        <tr>
          <td colspan="2" ><input type="submit" value="Enviar email"/></td>
        </tr>
      </table>
    </form>
  </section>
<?php
    require_once("../layout/footer.php");
    ?>
