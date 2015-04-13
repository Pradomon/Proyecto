<!DOCTYPE html>
<html lang="es"> 
<head><!-- Index -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title> LOGIN </title>
	<!--                                                                                 PROPIOS    -->
	<link href="css/cocina.css" 		rel="stylesheet" type="text/css" media="screen" > 
	<!--                                                                                 ADAPTACION -->
	

	<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="js/cocina.js"></script>
  	

</head>	

<body>

<?php
require_once("phpDB/conexion.php");
require_once("phpDB/selectusuarios.php");
?>


<?php

	session_start();
	


	$nomusu = $_POST["nomusu"];
	$password1 = $_POST["password1"];
	

	echo $nomusu;
	echo "<p></p>";
	echo $password1;
	echo "<p></p>";
	
	
$link=abrirconexion();


$query = "SELECT * FROM usuarios"
		. " where password = '$password1'"
		. " and nomusu = '$nomusu'";

echo "<p> Query : $query </p>";


$resultado = leerusuarios2($link, $query);

?>

</body>
</html>