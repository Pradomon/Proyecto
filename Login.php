


<?php

	//session_start();
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
	$usu=$_SESSION['iduser'];
    $nomusu=$_SESSION['nombreusu'];
    $foto=$_SESSION['foto'];
   
   	 echo "<p></p>";
    echo "...LOGIN";
	$pag2=basename($_SERVER['HTTP_REFERER']);	
	$url="$pag2"."?usu=$usu&nomusu=$nomusu&foto=$foto";
 
 	header("refresh: 7; url=$url");
 
 //  header('refresh:7; url=Cocina.php?usu=$usu&nomusu=$nomusu&foto=$foto');


?>
