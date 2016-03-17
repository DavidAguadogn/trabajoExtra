	<html>
	<head>
	<title>Inicio de sesion</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>
<style type="text/css">
*{
	font-size: 14px;
}

body{
	background-color:lightblue;
}

form.login {
    background: none repeat scroll 0 0 #F1F1F1;
    border: 1px solid #DDDDDD;
    font-family: sans-serif;
    margin: 0 auto;
    padding: 20px;
    width: 278px;
}
form.login div {
	width: 300 px;
    margin-bottom: 15px;
    overflow: hidden;
}
form.login div label {
    display: block;
    float: left;
    line-height: 25px;
}
form.login div input[type="text"], form.login div input[type="password"] {
    border: 1px solid #DCDCDC;
    float: right;
    padding: 4px;
}
form.login div input[type="submit"] {
    background: none repeat scroll 0 0 #DEDEDE;
    border: 1px solid #C6C6C6;
    float: right;
    font-weight: bold;
    padding: 4px 20px;
}
.error{
    color: red;
    font-weight: bold;
    margin: 10px;
    text-align: center;
}


</style>
	<body>
	
	<h1 align="center">Inicia sesión para acceder a ALL-RIDE!</h1>
    
    
	<form action="control.php" method="post" class="login" align="center"><br>
	Usuario: <input type="text" name="usuario" id="usuario" /><br>
	Contraseña: <input type="password" name="clave" id="clave" /><br>
	<input type="submit" value="Entrar">
	</form>
    
	</body>
	</html>
