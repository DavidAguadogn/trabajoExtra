<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("../modificaciones.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregar bici</title>
</head>

<body>


<?php
if(isset($_POST['registrar']))
{
	if(isset($_POST['marca']) && !empty($_POST['marca']))
	{
		$marca = $_POST['marca'];
		$color = $_POST['color'];
		
		mysql_query("insert into bicis(marca, color) VALUES('$marca', '$color')", $conexion) or die(mysql_error());
		
		echo "<p style='color:green;'>Bici añadida con éxito</p>";
	}
	else
	{
		echo "<p style='color:red;'>Error, introduce los datos a añadir</p>";
	}
}
?>
<form action="" method="post" name="formulario">
<input placeholder="Marca" name="marca" type="text" size="15" maxlength="30" />
<input placeholder="Color" name="color" type="text" size="15" maxlength="30" />
<input type="submit" value="registrar" name="registrar" type="button" />

</form>
<br />

<a href="../principal.php">Regresar</a>
</body>
</html>
