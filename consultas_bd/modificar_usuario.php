<?php
ob_start();
include("../modificaciones.php");
/*variable donde interceptamos por el metodo GET el ID mandado desde la pagina modificar.php*/
$ID = $_GET["ID"];
/*la consulta compara la variable con el id de la BD*/
$consultas = mysql_query("SELECT * FROM usuarios WHERE idusuario='".$ID."'", $conexion) or die(mysql_error());

		while($filax = mysql_fetch_array($consultas))
		{	
			$user=$filax['usuario'];
			$pass=$filax['password'];
		}
		/*si se encuentra el usuario2 y si no se encuentra vacio se ejecuta el UPDATE (actualización en la BD)*/
if(isset($_POST['modificar']))
{
	if(isset($_POST['user2']) && !empty($_POST['user2']) &&
	isset($_POST['pass2']) && !empty($_POST['pass2']))
	{
		$usuario2 = $_POST['user2'];
		$pass2 = $_POST['pass2'];
		
		mysql_query("UPDATE usuarios SET usuario = '$usuario2', password = '$pass2' WHERE idusuario = '$ID'", $conexion) or die(mysql_error());
		
		/*redirecciona a la página modificar.php*/
		header('refresh: 1; url=modificar.php');
		
		echo "<p style='color:green;'>MODIFICACION REALIZADA CON EXITO</p>";
	}
	else
	{
		echo "error";
	}
}
?>

<form name="formulario" method="post" action="">
     <!--en value meto introduzco el usuario y contraseña recogidos de la BD, cambiando el type de password por text, para visualizar por pantalla la contraseña -->
    <input placeholder="" type="text" name="user2" value="<?php echo $user;?>" maxlength="30" size="40">
    
    <input placeholder="" value="<?php echo $pass;?>" type="text" name="pass2" maxlength="30" size="40">
    
    <input  type="submit"  value="Modificar" name="modificar">
    
</form>
<br />
<a href="modificar.php">Regresar</a>

</body>
</html>
