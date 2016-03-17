<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("../modificaciones.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregar usuario</title>
</head>

<body>
<?php
if(isset($_POST['registrar']))
{
	if(isset($_POST['user']) && !empty($_POST['user']) &&
	isset($_POST['password']) && !empty($_POST['password']))
	{
		$usuario = $_POST['user'];
		$pass = $_POST['password'];
		
		mysql_query("insert into usuarios(usuario, password) VALUES('$usuario', '$pass')", $conexion) or die(mysql_error());
		
		echo "<p style='color:green;'>Usuario registrado con éxito</p>";
	}
	else
	{
		echo "<p style='color:red;'>Error, introduce usuario y contraseña</p>";
	}
}
?>
<form action="" method="post" name="formulario">
<input placeholder="Usuario" name="user" type="text" size="15" maxlength="30" />
<input placeholder="Contraseña" name="password" type="password" size="15" maxlength="30" />
<input type="submit" value="registrar" name="registrar" type="button" />

</form>
<br />




<a href="../principal.php">Regresar</a>
</body>
</html>