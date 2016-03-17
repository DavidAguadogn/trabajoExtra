<?include ("seguridad.php");?> 
<html> 
<head> 
<title>ALL-RIDE!</title> 

</head> 

<div>
<div class="divcab"><h2 class="cabecera" align="center">ALL RIDE</h2></div>
<div class="divcab"><a href="../trabajo_extra/principal.php"><h2 class="cabecera" align="center">Inicio</h2></a></div>	  
<div class="divcab"><a href="bicis.php"><h2  class="cabecera" align="center">Bicis</h2></a></div>    

<div class="divcab"><a href="salir.php"><h2  class="cabecera" align="center">Salir</h2></a></div>
</div>

<body>

<?

//Ejemplo ejecucion de css dinamico con Cookies.
//Veo si recibo datos del formulario
if(isset($_POST["estilo"])){

  //es que estoy recibiendo un estilo nuevo, lo tengo que meter en las cookies
  $estilo = $_POST["estilo"];

  //meto el estilo en una cookie
  setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));

}else{

  //si no he recibido el estilo que desea el usuario en la p�gina, miro si hay una cookie creada
  if (isset($_COOKIE["estilo"])){

    //es que tengo la cookie
    $estilo = $_COOKIE["estilo"];

  }else{

    //no tengo Cookie y tomo el estilo de los ejemplos.
    $estilo = "ejemplos";
  }

}

$ruta = "skins/"; //Se define la ruta deacceso a los css.

?>

<?

//miro si he tengo un estilo definido, porque entonces tengo que cargar la correspondiente hoja de estilos
if( isset($estilo) ){
    echo '<link rel="STYLESHEET" type="text/css" href="' . $ruta.$estilo . '.css">';
}else{
        echo '<link rel="STYLESHEET" type="text/css" href="' . $ruta. 'ejemplos.css">';
}

?>
</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div  align="center">Aqu&iacute; puedes seleccionar el estilo que prefieres en la p&aacute;gina: <br>
    <select name="estilo">
      <option <? if( $estilo == "ejemplos" ) echo 'selected'; ?> 
        value="ejemplos">Original</option> 
      <option <? if( $estilo == "otro" ) echo 'selected'; ?> 
        value="otro">Otro</option>
      <option <? if( $estilo == "administrador" ) echo 'selected'; ?> 
        value="administrador">Administrador</option>
      <option <? if( $estilo == "ninguno" ) echo 'selected'; ?> 
        value="ninguno">Ninguno</option>
    </select>
    &nbsp;
    <input type="submit" value="Actualizar el estilo">
  </div>
</form>
<!--<form action="../trabajo_extra/indiceCookies.html" method="POST">
</form>-->

  
<div class="divtext" align="left">

<button><a href id="abutton" ="consultas_bd/consultar_pieza.php">Listar piezas</a></button>
<br>
<button><a href id="abutton" ="consultas_bd/consultar_bici.php">Listar bicis</a></button>
</div>
<br>

  <div class="divimg" align="center"><img src="img/bici.jpg" width="534" height="121"></div>
<br>

  <?php
if($_SESSION["usuarioactual"]=="admin"){
	include("admin.html");
	}
	else{
		echo "<br>"."No eres el administrador, no tienes acceso a esta parte de la página";
		}
?>		
</h3>
<div align="right">
  <blockquote><a href="salir.php"><button>Salir</button></a></blockquote>
</div>
	<footer id="main-footer">
	  <p>&copy; 2016 <a href="">ALL RIDE!!</a></p>
</footer>
</body> 
</html> 




