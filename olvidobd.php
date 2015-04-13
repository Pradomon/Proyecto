<html>
<head>
  <title>OLVIDO</title>
</head>
<body>




<?php

session_start();
require_once("phpDB/conexion.php");
require_once("phpDB/selectusuarios.php");


$email = "No llega nada";
if (isset($_POST['correoo'])) 
   $email = $_POST['correoo'];
  
   echo $email;  
 echo "<p></p>";
 
  
$link=abrirconexion();
 

$query = "SELECT * FROM usuarios"
    . " where email = '$email'";
    
echo "<p> Query : $query </p>";


$resultado = leerusuarios1($link, $query);




?>


</body>
</html>
