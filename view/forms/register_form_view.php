<?php
    require_once("../layout/library.php");
    require_once("../layout/header.php");
    ?>
<body>
<div id="div-prin">
  <section class="center width100">
    <h2> Logeate </h2>
    <form id="login" action="/aw/controller/register_controller.php" method="post">
      <table class="width100">
        <tr>
            <td><input name="name" type="text" size="25" placeholder="Nombre" required /></td>
        </tr>
        <tr>
            <td><input name="surname" type="text" size="25" placeholder="Apellidos" required /></td>
        </tr>
        <tr>
            <td><input name="direction" type="text" size="25" placeholder="Direccion" required /></td>
        </tr>
        <tr>
            <td><input name="email" type="email" size="25" placeholder="email" required /></td>
        </tr>
        <tr>
            <td><input name="telephone" type="text" size="25" placeholder="Telefono" required /></td>
        </tr>
        <tr>
          <td><input name="nif" type="text" size="25" placeholder="NIF" required /></td>
        </tr>
        <tr>
          <td colspan="2"><input name="pass" type="password" placeholder="Contraseña" size="40" required /></td>
        </tr>
        <tr>
            <td colspan="2"><input name="confirm_pass" type="password" placeholder="Repite la Contraseña" size="40" required /></td>
        </tr>
        <tr>
<td>Soy:
                <select name="type" required />
                    <option value="0">Cliente</option>
                    <option value="1">Restaurante</option>
                    <option value="2">Transportista</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" name="conditions" required/> He leido y acepto <a href="terms.html">nuestros terminos y condiciones</a>.</td>
        </tr>
        <tr>
          <td colspan="2" ><input type="submit" value="Registrarse"/></td>
        </tr>
      </table>
    </form>
  </section>
<?php
    require_once("../layout/footer.php");
    ?>
