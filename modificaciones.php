<?php

// datos para la coneccion a mysql 
$hostdb= "127.0.0.1";
$userdb= "root";
$passdb= "";
$db= "users";



//Realizamos la conexion
$conexion = mysql_connect($hostdb,$userdb,$passdb);



//Estructura de control por si falla
if(!$conexion)
{
die("No he podido conectar porque: ".mysql_error());
}

//Seleccion la base de datos
mysql_select_db($db,$conexion);



?>