<html lang="es">
<head>
<meta charset="utf-8" />
<title>Inicio de sesión</title>
</head>
<body>
<h1>Iniciar sesión</h1>
<!--formulario-->
<a href="<?= base_url().'index.php/login/verify_sesion'?>"
<label for="Usuario"> Usuario</label>
<input type="text" name="user" /> <br/>
<label for="contraseña"> Contraseña</label>
<input type="password" name="pass" /> <br/>
<input type="submit" value="Entrar" name="submit" /> <br/>

</form>
</body>
</html>