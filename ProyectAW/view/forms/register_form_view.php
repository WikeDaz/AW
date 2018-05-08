<div id="prin">
    <h2> Unete a nuestra red </h2>
    <form id="login" action="/ProyectAW/controller/register_controller.php" method="post">
      <ul>
        <li><input name="name" type="text" size="25" placeholder="Nombre" required /></li>
            <li><input name="surname" type="text" size="25" placeholder="Apellidos" required /></li>
            <li><input name="direction" type="text" size="25" placeholder="Direccion" required /></li>
            <li><input name="email" type="email" size="25" placeholder="email" required /></li>
            <li><input name="telephone" type="text" size="25" placeholder="Telefono" required /></li>
          <li><input name="nif" type="text" size="25" placeholder="NIF" required /></li>
            <li><textarea name="description" placeholder="Si eres un Restaurante rellena la descripcion de su restaurante."></textarea></li>
          <li><input name="passwd" type="password" placeholder="Contraseña" size="40" required /></li>
            <li><input name="confirm_pass" type="password" placeholder="Repite la Contraseña" size="40" required /></li>
<li>Soy:
                <select name="type" required />
                    <option value="0">Cliente</option>
                    <option value="1">Restaurante</option>
                    <option value="2">Transportista</option>
                </select>
            </li>
            <li><input type="checkbox" name="conditions" required/> He leido y acepto <a href="terms.html">nuestros terminos y condiciones</a>.</li>
          <li><input type="submit" value="Registrarse"/></li>
        </ul>
    </form>
</div>
