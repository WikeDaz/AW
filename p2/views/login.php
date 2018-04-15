<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>

<body>
	<form action="action_page.php">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Usuario</b></label>
    <input type="text" placeholder="Nombre de usuario" name="uname" required>

    <label for="psw"><b>Contraseña</b></label>
    <input type="password" placeholder="Contraseña" name="psw" required>

    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Registrarse <a href="registro.php">Nuevo usuario</a></span>
  </div>
</form>
	
</body>
</html>
