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

  <div align="center">Aqu&iacute; puedes seleccionar el estilo que prefieres en la p&aacute;gina: <br>

    <select name="estilo">

      <option <? if( $estilo == "ejemplos" ) echo 'selected'; ?> 

        value="ejemplos">Original</option> 

      <option <? if( $estilo == "otro" ) echo 'selected'; ?> 

        value="otro">Otro</option>
        
        <option <? if( $estilo == "administrador" ) echo 'selected'; ?> 

        value="administrador">administrador</option>

      <option <? if( $estilo == "ninguno" ) echo 'selected'; ?> 

        value="ninguno">Ninguno</option>

    </select>

    &nbsp;

    <input type="submit" value="Actualizar el estilo">

  </div>

</form>

<form action="indiceCookies.html" method="POST">
</form>
