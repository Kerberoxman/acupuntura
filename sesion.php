<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Inicio</title>
</head>
<link rel="stylesheet" type="text/css" href="sesion.css">
<body>

<?php
	//include ("maestra.php");
session_start();
if(!isset($_SESSION["usuario"])){
	header("location:login.php");
}


	require_once ("conexion.php");
	$usuario = $_SESSION["usuario"];
	
	$busqueda = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario'",$conexion);
	$fila3 = mysql_fetch_array($busqueda);
	
?>
<div id="cuerpo">
	<p id="bienvenido">Bienvenido (a) <?php echo $fila3['nombre'];?></p>
    <img src="imagenes/logo_academico.png" id="img">
</div>

<header>
	
</header>


</body>
</html>