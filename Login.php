


<?php

	//session_start();
	require_once("phpDB/conex.php");
	require_once("phpDB/selectusuarios.php");


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

	$usu=$_SESSION['iduser'];
    $nomusu=$_SESSION['nombreusu'];
    $foto=$_SESSION['foto'];
    echo "<p></p>";
    
    echo "<p></p>";
    $pag=basename($_SERVER['PHP_SELF']);
	echo "<p> Server : $pag </p>";
    echo "<p></p>";
    echo $usu;
    echo "<p></p>";
    echo $nomusu;
    echo "<p></p>";
    echo "variables de la SESIION................................";
     echo "<p></p>";
     echo "<p></p>";
    echo "............................antes del header .................";
   // header("refresh: 10; url = Cocina.php"); 
    //header("refresh: 10; url = Cocina.php/?usu=$usu&nomusu=$nomusu"); 
    header('refresh:7; url=Cocina.php?usu=$usu&nomusu=$nomusu');


?>
