<html>
<head>
  <title>OLVIDO</title>
</head>
<body>




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




?>


</body>
</html>
