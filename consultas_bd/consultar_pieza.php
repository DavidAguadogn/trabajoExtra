<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultar piezas</title>
</head>
<body>

<?php
include("../modificaciones.php");


		
		$consulta = mysql_query("SELECT * FROM piezas", $conexion) or die(mysql_error());
		
?>

			<table width="40%" border="1">
            <tr>
				<td>PIEZA</td>
				<td>PRECIO</td>
                <td>CANTIDAD</td>
			  </tr>
<?php
		//busco fila por fila la consulta
		while($filas = mysql_fetch_array($consulta))
		{	
			$pieza=$filas['nombre_pieza'];
			$precio=$filas['precio'];
			$cantidad=$filas['cantidad'];
			
?>
			  <tr>  <!--cada vez que encuentre un usuario y contraseña lo pega en la tabla -->
				<td><?php echo "<p style='color:#666;'>".$pieza."</p>";?></td>
				<td><?php echo "<p style='color:#ccc;'>".$precio."</p>";?></td>
                <td><?php echo "<p style='color:#ccc;'>".$cantidad."</p>";?></td>
			  </tr>

<?php
			
			
		}


?>
</table>
<br />
<a href="../principal.php">Regresar</a>

</body>
</html>