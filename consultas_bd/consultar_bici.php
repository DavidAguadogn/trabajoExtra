<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practica PHP</title>
</head>
<body>

<?php
include("../modificaciones.php");


		
		$consulta = mysql_query("SELECT * FROM bicis", $conexion) or die(mysql_error());
		
?>

			<table width="40%" border="1">
            <tr>
				<td>BICI</td>
				<td>COLOR</td>
			  </tr>
<?php
		//busco fila por fila la consulta
		while($filas = mysql_fetch_array($consulta))
		{	
			$marca=$filas['marca'];
			$color=$filas['color'];
			
?>
			  <tr>  <!--cada vez que encuentre un usuario y contraseña lo pega en la tabla -->
				<td><?php echo "<p style='color:#666;'>".$marca."</p>";?></td>
				<td><?php echo "<p style='color:#ccc;'>".$color."</p>";?></td>
			  </tr>

<?php
			
			
		}


?>
</table>
<br />
<a href="../principal.php">Regresar</a>

</body>
</html>