
<?php

session_start();
require_once("phpDB/conex.php");
require_once("phpDB/selectusuarios.php");



if (isset($_POST['correoo'])) 
   $email = $_POST['correoo'];
  
  
 
  
$link=abrirconexion();
 

$query = "SELECT * FROM usuarios"
    . " where email = '$email'";
    



$resultado = leerusuarios1($link, $query);

$usu=$_SESSION['iduser'];
$nomusu=$_SESSION['nombreusu'];
$foto=$_SESSION['foto'];
   
$pag2=basename($_SERVER['HTTP_REFERER']);	
$url="$pag2"."?usu=$usu&nomusu=$nomusu&foto=$foto";
 
header("refresh: 7; url=$url");




?>


</body>
</html>
