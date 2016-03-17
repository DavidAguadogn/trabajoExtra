<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificar usuario</title>
</head>
<body>

<?php
include("../modificaciones.php");
	
		$consulta = mysql_query("SELECT * FROM usuarios", $conexion) or die(mysql_error());
		
?>

			<table width="40%" border="1">
            <tr>
				<td>USUARIOS</td>
				<td>PASSWORD</td>
                <td>ACCION</td>
			  </tr>
<?php
		
		while($filas = mysql_fetch_array($consulta))
		{	
			$IDu=$filas['idusuario'];
			$usuario=$filas['usuario'];
			$password=$filas['password'];
			
?>
			  <tr>
				<td><?php echo "<p style='color:#666;'>".$usuario."</p>";?></td>
				<td><?php echo "<p style='color:#ccc;'>".$password."</p>";?></td>              <!--echo $IDu; por medio de la variable envio mediante GET desde la BD --> 
                <td><a href="modificar_usuario.php?ID=<?php echo $IDu;?>">modificar</a></td>
			  </tr>
<?php						
		}

?>
</table>
<br />
<a href="../principal.php">Regresar</a>

</body>
</html>