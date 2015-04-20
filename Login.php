


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

	//session_start();
   
   // header("refresh: 10; url = Cocina.php"); 
    //header("refresh: 10; url = Cocina.php/?usu=$usu&nomusu=$nomusu"); 
   // header('refresh:7; url=Cocina.php?usu=$usu&nomusu=$nomusu&foto=$foto');


?>
