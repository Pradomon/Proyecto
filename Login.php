


<?php

	
	require_once("phpDB/conex.php");
	require_once("phpDB/selectusuarios.php");


	$nomusu = $_POST["nomusu"];
	$password1 = $_POST["password1"];
	

	
	
	
$link=abrirconexion();


$query = "SELECT * FROM usuarios"
		. " where password = '$password1'"
		. " and nomusu = '$nomusu'";




$resultado = leerusuarios2($link, $query);

	
   
	$usu=$_SESSION['iduser'];
    $nomusu=$_SESSION['nombreusu'];
    $foto=$_SESSION['foto'];
   
   
	$url=basename($_SERVER['HTTP_REFERER']);
	$rest = substr($url, -3);	
	
	if ($rest !=="php") $url='index.php';
	
 	//echo "HOST : " . gethostname();
 	header("refresh: 7; url=$url");
 
 

?>
